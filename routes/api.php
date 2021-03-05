<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    // Auth system

        Route::post('/login', 'Auth\LoginController@login')->name('login');

        Route::any('/reject', 'Auth\LoginController@reject')->name('reject');

        Route::post('/reset-password', 'Auth\PasswordController@send')->name('reset.password.send');

        Route::put('/reset-password', 'Auth\PasswordController@rest')->name('reset.password.rest');

        Route::post('/register', 'UserController@store')->name('register');

    Route::middleware(['auth:api', 'UserDisabled'])->group(function () {

        // Routes users

            Route::name('users.')->group(function () {

                Route::get('/users', 'UserController@index')->name('list')->middleware('ApiPermission:users.list');

                // Route::post('/users', 'UserController@store')->name('create');

                Route::get('/users/{id}', 'UserController@show')->name('show');

                Route::put('/users/{id}', 'UserController@update')->name('update');

                Route::put('/users/status/{id}', 'UserController@status')->name('status')->middleware('ApiPermission:users.update');

                Route::delete('/users/{id}', 'UserController@destroy')->name('destroy')->middleware('ApiPermission:users.delete');

                Route::post('/users/answer', 'UserController@answer')->name('user.create.answer');

                Route::get('/users/results/{id}', 'UserController@UserResults')->name('user.result');

                Route::get('/results/all', 'UserController@getAllUsersResults')->name('users.results')->middleware('ApiPermission:users.results');
            });

        // Routes categories

            Route::name('categories.')->group(function () {

                Route::get('/categories', 'Admin\CategoryController@index')->name('list');

                Route::post('/categories', 'Admin\CategoryController@store')->name('create')->middleware('ApiPermission:categories.create');

                Route::get('/categories/{id}', 'Admin\CategoryController@show')->name('show');

                Route::put('/categories/{id}', 'Admin\CategoryController@update')->name('update')->middleware('ApiPermission:categories.update');

                Route::delete('/categories/{id}', 'Admin\CategoryController@destroy')->name('destroy')->middleware('ApiPermission:categories.delete');
            });
        
        // Routes addictions

            Route::name('addictions.')->group(function () {

                Route::get('/addictions', 'Admin\AddictionController@index')->name('list');

                Route::post('/addictions', 'Admin\AddictionController@store')->name('create')->middleware('ApiPermission:addictions.create');

                Route::get('/addictions/{id}', 'Admin\AddictionController@show')->name('show');

                Route::put('/addictions/{id}', 'Admin\AddictionController@update')->name('update')->middleware('ApiPermission:addictions.update');

                Route::delete('/addictions/{id}', 'Admin\AddictionController@destroy')->name('destroy')->middleware('ApiPermission:addictions.delete');
            });
        
        // Routes difficulty levels

            Route::name('difficulty.levels.')->group(function () {

                Route::get('/difficulty/levels', 'Admin\DifficultyLevelController@index')->name('list');

                Route::post('/difficulty/levels', 'Admin\DifficultyLevelController@store')->name('create')->middleware('ApiPermission:difficulty.levels.create');

                Route::get('/difficulty/levels/{id}', 'Admin\DifficultyLevelController@show')->name('show');

                Route::put('/difficulty/levels/{id}', 'Admin\DifficultyLevelController@update')->name('update')->middleware('ApiPermission:difficulty.levels.update');

                Route::delete('/difficulty/levels/{id}', 'Admin\DifficultyLevelController@destroy')->name('destroy')->middleware('ApiPermission:difficulty.levels.delete');
            });

        // Routes information levels

            Route::name('information.levels.')->group(function () {

                Route::get('/information/levels', 'Admin\InformationLevelController@index')->name('list');

                Route::post('/information/levels', 'Admin\InformationLevelController@store')->name('create')->middleware('ApiPermission:information.levels.create');

                Route::get('/information/levels/{id}', 'Admin\InformationLevelController@show')->name('show');

                Route::put('/information/levels/{id}', 'Admin\InformationLevelController@update')->name('update')->middleware('ApiPermission:information.levels.update');

                Route::delete('/information/levels/{id}', 'Admin\InformationLevelController@destroy')->name('destroy')->middleware('ApiPermission:information.levels.delete');
            });

        // Routes territorial

            // Routes zones

                Route::name('zones.')->group(function () {

                    Route::get('/zones', 'Territoral\ZoneController@index')->name('list');

                    Route::post('/zones', 'Territoral\ZoneController@store')->name('create')->middleware('ApiPermission:zones.create');

                    Route::get('/zones/{id}', 'Territoral\ZoneController@show')->name('show');

                    Route::put('/zones/{id}', 'Territoral\ZoneController@update')->name('update')->middleware('ApiPermission:zones.update');

                    Route::delete('/zones/{id}', 'Territoral\ZoneController@destroy')->name('destroy')->middleware('ApiPermission:zones.delete');
                });

            // Routes communes

                Route::name('communes.')->group(function () {

                    Route::get('/communes', 'Territoral\CommuneController@index')->name('list');

                    Route::post('/communes', 'Territoral\CommuneController@store')->name('create')->middleware('ApiPermission:communes.create');

                    Route::get('/communes/{id}', 'Territoral\CommuneController@show')->name('show');

                    Route::put('/communes/{id}', 'Territoral\CommuneController@update')->name('update')->middleware('ApiPermission:communes.update');

                    Route::delete('/communes/{id}', 'Territoral\CommuneController@destroy')->name('destroy')->middleware('ApiPermission:communes.delete');
                });

            // Routes neighborhoods

                Route::name('neighborhoods.')->group(function () {

                    Route::get('/neighborhoods', 'Territoral\NeighborhoodController@index')->name('list');

                    Route::post('/neighborhoods', 'Territoral\NeighborhoodController@store')->name('create')->middleware('ApiPermission:neighborhoods.create');

                    Route::get('/neighborhoods/{id}', 'Territoral\NeighborhoodController@show')->name('show');

                    Route::put('/neighborhoods/{id}', 'Territoral\NeighborhoodController@update')->name('update')->middleware('ApiPermission:neighborhoods.update');

                    Route::delete('/neighborhoods/{id}', 'Territoral\NeighborhoodController@destroy')->name('destroy')->middleware('ApiPermission:neighborhoods.delete');
                });

        // Routes university

            // Routes programs

                Route::name('programs.')->group(function () {

                    Route::get('/programs', 'University\ProgramController@index')->name('list');

                    Route::post('/programs', 'University\ProgramController@store')->name('create')->middleware('ApiPermission:programs.create');

                    Route::get('/programs/{id}', 'University\ProgramController@show')->name('show');

                    Route::put('/programs/{id}', 'University\ProgramController@update')->name('update')->middleware('ApiPermission:programs.update');

                    Route::delete('/programs/{id}', 'University\ProgramController@destroy')->name('destroy')->middleware('ApiPermission:programs.delete');
                });

            // Routes modalities

                Route::name('modalities.')->group(function () {

                    Route::get('/modalities', 'University\ModalityController@index')->name('list');

                    Route::post('/modalities', 'University\ModalityController@store')->name('create')->middleware('ApiPermission:modalities.create');

                    Route::get('/modalities/{id}', 'University\ModalityController@show')->name('show');

                    Route::put('/modalities/{id}', 'University\ModalityController@update')->name('update')->middleware('ApiPermission:modalities.update');

                    Route::delete('/modalities/{id}', 'University\ModalityController@destroy')->name('destroy')->middleware('ApiPermission:modalities.delete');
                });

            // Routes semesters

                Route::name('semesters.')->group(function () {

                    Route::get('/semesters', 'University\SemesterController@index')->name('list');

                    Route::post('/semesters', 'University\SemesterController@store')->name('create')->middleware('ApiPermission:semesters.create');

                    Route::get('/semesters/{id}', 'University\SemesterController@show')->name('show');

                    Route::put('/semesters/{id}', 'University\SemesterController@update')->name('update')->middleware('ApiPermission:semesters.update');

                    Route::delete('/semesters/{id}', 'University\SemesterController@destroy')->name('destroy')->middleware('ApiPermission:semesters.delete');
                });

        // Routes education secretary

            // Routes educational institutions

                Route::name('educational.institutions.')->group(function () {

                    Route::get('/educational/institutions', 'Secretary\EducationalInstitutionController@index')->name('list');

                    Route::post('/educational/institutions', 'Secretary\EducationalInstitutionController@store')->name('create')->middleware('ApiPermission:educational.institutions.create');

                    Route::get('/educational/institutions/{id}', 'Secretary\EducationalInstitutionController@show')->name('show');

                    Route::put('/educational/institutions/{id}', 'Secretary\EducationalInstitutionController@update')->name('update')->middleware('ApiPermission:educational.institutions.update');

                    Route::delete('/educational/institutions/{id}', 'Secretary\EducationalInstitutionController@destroy')->name('destroy')->middleware('ApiPermission:educational.institutions.delete');
                });

            // Routes grades

                Route::name('grades.')->group(function () {

                    Route::get('/grades', 'Secretary\GradeController@index')->name('list');

                    Route::post('/grades', 'Secretary\GradeController@store')->name('create')->middleware('ApiPermission:grades.create');

                    Route::get('/grades/{id}', 'Secretary\GradeController@show')->name('show');

                    Route::put('/grades/{id}', 'Secretary\GradeController@update')->name('update')->middleware('ApiPermission:grades.update');

                    Route::delete('/grades/{id}', 'Secretary\GradeController@destroy')->name('destroy')->middleware('ApiPermission:grades.delete');
                });

        // Routes educational institution

            // Routes educational grades

                Route::name('educational.grades.')->group(function () {

                    Route::get('/educational/grades', 'Institution\EducationalGradeController@index')->name('list');

                    Route::post('/educational/grades', 'Institution\EducationalGradeController@store')->name('create')->middleware('ApiPermission:educational.grades.create');

                    Route::get('/educational/grades/{id}', 'Institution\EducationalGradeController@show')->name('show');

                    Route::put('/educational/grades/{id}', 'Institution\EducationalGradeController@update')->name('update')->middleware('ApiPermission:educational.grades.update');

                    Route::delete('/educational/grades/{id}', 'Institution\EducationalGradeController@destroy')->name('destroy')->middleware('ApiPermission:educational.grades.delete');
                });

        // Routes company

            // Routes locations

                Route::name('locations.')->group(function () {

                    Route::get('/locations', 'Company\LocationController@index')->name('list');

                    Route::post('/locations', 'Company\LocationController@store')->name('create')->middleware('ApiPermission:locations.create');

                    Route::get('/locations/{id}', 'Company\LocationController@show')->name('show');

                    Route::put('/locations/{id}', 'Company\LocationController@update')->name('update')->middleware('ApiPermission:locations.update');

                    Route::delete('/locations/{id}', 'Company\LocationController@destroy')->name('destroy')->middleware('ApiPermission:locations.delete');
                });

            // Routes areas

                Route::name('areas.')->group(function () {

                    Route::get('/areas', 'Company\AreaController@index')->name('list');

                    Route::post('/areas', 'Company\AreaController@store')->name('create')->middleware('ApiPermission:areas.create');

                    Route::get('/areas/{id}', 'Company\AreaController@show')->name('show');

                    Route::put('/areas/{id}', 'Company\AreaController@update')->name('update')->middleware('ApiPermission:areas.update');

                    Route::delete('/areas/{id}', 'Company\AreaController@destroy')->name('destroy')->middleware('ApiPermission:areas.delete');
                });

            // Routes schedules

                Route::name('schedules.')->group(function () {

                    Route::get('/schedules', 'Company\SchedulController@index')->name('list');

                    Route::post('/schedules', 'Company\SchedulController@store')->name('create')->middleware('ApiPermission:schedules.create');

                    Route::get('/schedules/{id}', 'Company\SchedulController@show')->name('show');

                    Route::put('/schedules/{id}', 'Company\SchedulController@update')->name('update')->middleware('ApiPermission:schedules.update');

                    Route::delete('/schedules/{id}', 'Company\SchedulController@destroy')->name('destroy')->middleware('ApiPermission:schedules.delete');
                });

        // Routes questions
                
            Route::name('questions.')->group(function () {

                Route::get('/questions', 'Admin\QuestionController@index')->name('list');

                Route::post('/questions', 'Admin\QuestionController@store')->name('create')->middleware('ApiPermission:questions.create');

                Route::get('/questions/{id}', 'Admin\QuestionController@show')->name('show');

                Route::put('/questions/{id}', 'Admin\QuestionController@update')->name('update')->middleware('ApiPermission:questions.update');

                Route::delete('/questions/{id}', 'Admin\QuestionController@destroy')->name('destroy')->middleware('ApiPermission:questions.delete');
            });

        // Routes answers
                
            Route::name('answers.')->group(function () {

                Route::get('/answers', 'Admin\AnswerController@index')->name('list');

                Route::post('/answers', 'Admin\AnswerController@store')->name('create')->middleware('ApiPermission:answers.create');

                Route::get('/answers/{id}', 'Admin\AnswerController@show')->name('show');

                Route::put('/answers/{id}', 'Admin\AnswerController@update')->name('update')->middleware('ApiPermission:answers.update');

                Route::delete('/answers/{id}', 'Admin\AnswerController@destroy')->name('destroy')->middleware('ApiPermission:answers.delete');
            });

        // Routes tests
                
            Route::name('tests.')->group(function () {

                Route::get('/tests', 'Admin\TestController@index')->name('list');

                Route::post('/tests', 'Admin\TestController@store')->name('create')->middleware('ApiPermission:tests.create');

                Route::get('/tests/{id}', 'Admin\TestController@show')->name('show');

                Route::put('/tests/{id}', 'Admin\TestController@update')->name('update')->middleware('ApiPermission:tests.update');

                Route::delete('/tests/{id}', 'Admin\TestController@destroy')->name('destroy')->middleware('ApiPermission:tests.delete');
            });

        // Auth system

            Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    });

    Route::get('/countries', 'CountryController@countries')->name('countries.list');

    Route::get('/states', 'CountryController@states')->name('states.list');

    Route::get('/cities', 'CountryController@cities')->name('cities.list');

    Route::get('/clients', 'UserController@clients')->name('client.list');
});