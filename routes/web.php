<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/director', 'websiteController@director')->name('director');
Route::get('/director-single/{id}', 'websiteController@director_single')->name('directorsingle');

// EVENTS
Route::get('/event','websiteController@eventpage')->name('eventpage');
Route::get('/event-single/{id}', 'websiteController@event_single')->name('event_single');
Route::get('/partners', 'websiteController@partners')->name('partners');
Route::get('/viewallnotice', 'websiteController@viewallnotice')->name('viewallnotice');
Route::get('/notice-single/{id}', 'websiteController@notice_single')->name('notice_single');

Route::get('/viewallnews', 'websiteController@viewallnews')->name('viewallnews');
Route::get('/news_single/{id}', 'websiteController@news_single')->name('news_single');

Route::get('/viewphotogallery', 'websiteController@viewphotogallery')->name('viewphotogallery');
Route::get('/single gallery/{id}', 'websiteController@single_gallery')->name('single_gallery');
Route::get('/getvideogallery', 'websiteController@getvideogallery')->name('getvideogallery');

Route::get('/about-us', 'websiteController@aboutus')->name('aboutus');
Route::get('/objective', 'websiteController@objective')->name('objective');
Route::get('/ourmission', 'websiteController@ourmission')->name('ourmission');
Route::get('/contact', 'websiteController@contact')->name('contact');
Route::post('/insertcontact', 'websiteController@insertcontact')->name('insertcontact');
Route::get('/rp', 'websiteController@rp')->name('rp');

/************************************************
                 FrontEnd
/*************************************************/
Route::get('/', 'websiteController@index')->name('index');



/************************************************
                Backend
/*************************************************/

Route::get('/deshboard', 'adminController@deshboard')->name('deshboard');


// menu submenu
Route::get('/menu', 'menuController@menu')->name('menu');
Route::get('/addmenu','menuController@addmenu')->name('addmenu');
Route::post('/insertmenu','menuController@insertmenu')->name('insertmenu');
Route::get('/editmenu/{id}','menuController@editmenu')->name('editmenu');
Route::post('/updatemenu/{id}','menuController@updatemenu')->name('updatemenu');
Route::get('/unpublishmenu/{id}', 'menuController@unpublishmenu')->name('unpublishmenu');
Route::get('publishmenu/{id}','menuController@publishmenu')->name('publishmenu');
Route::get('delete_menu/{id}','menuController@delete_menu')->name('delete_menu');



// submenu
Route::get('addsubmenu/{id}','submenuController@addsubmenu')->name('addsubmenu');
Route::post('insertsubmenu','submenuController@insertsubmenu')->name('insertsubmenu');
Route::get('editsubmenu/{id}','submenuController@editsubmenu')->name('editsubmenu');
Route::post('updatesubmenu/{id}','submenuController@updatesubmenu')->name('updatesubmenu');
Route::get('deletesubmenu/{id}','submenuController@deletesubmenu')->name('deletesubmenu');

Route::get('/unpublishsubmenu/{id}', 'submenuController@unpublishsubmenu')->name('unpublishsubmenu');
Route::get('publishsubmenu/{id}','submenuController@publishsubmenu')->name('publishsubmenu');






// SLIDER 
Route::get('/allslider', 'sliderController@allslider')->name('allslider');
Route::get('/addslider', 'sliderController@addslider')->name('addslider');
Route::post('/insertslider', 'sliderController@insertslider')->name('insertslider');
Route::get('/editslider/{id}', 'sliderController@editslider')->name('editslider');
Route::post('/updateslider/{id}', 'sliderController@updateslider')->name('updateslider');
Route::get('/deleteslider/{id}', 'sliderController@deleteslider')->name('deleteslider');


// our news

Route::get('/allnews', 'ournewsController@allnews')->name('allnews');
Route::get('/addournews', 'ournewsController@addournews')->name('addournews');
Route::post('/insertournews', 'ournewsController@insertournews')->name('insertournews');
Route::get('/editournews/{id}', 'ournewsController@editournews')->name('editournews');
Route::post('/updateournews/{id}', 'ournewsController@updateournews')->name('updateournews');
Route::get('/deleteournews/{id}', 'ournewsController@deleteournews')->name('deleteournews');
Route::get('Enactive-ournews/{id}','ournewsController@Enactive_ournews')->name('Enactiveournews');
Route::get('active_ournews/{id}','ournewsController@active_ournews')->name('active_ournews');





// our notice
Route::get('/notice', 'noticeControler@notice')->name('notice');
Route::get('/addnotice', 'noticeControler@addnotice')->name('addnotice');
Route::post('/insernotice', 'noticeControler@insernotice')->name('insernotice');
Route::get('/editnotice/{id}', 'noticeControler@editnotice')->name('editnotice');
Route::post('/updatenotice/{id}', 'noticeControler@updatenotice')->name('updatenotice');
Route::get('/deletenotice/{id}', 'noticeControler@deletenotice')->name('deletenotice');
Route::get('Enactive_notice/{id}','noticeControler@Enactive_notice')->name('Enactive_notice');
Route::get('active_notice/{id}','noticeControler@active_notice')->name('active_notice');



// Latest News
Route::get('/latestnews', 'latestnewsController@latestnews')->name('latestnews');
Route::get('/addnews', 'latestnewsController@addnews')->name('addnews');
Route::post('/insertnews', 'latestnewsController@insertnews')->name('insertnews');
Route::get('/editnews/{id}', 'latestnewsController@editnews')->name('editnews');
Route::post('/updatenews/{id}', 'latestnewsController@updatenews')->name('updatenews');
Route::get('/deletenews/{id}', 'latestnewsController@deletenews')->name('deletenews');
Route::get('unpublish_news/{id}','latestnewsController@unpublish_news')->name('unpublish_news');
Route::get('publish_news/{id}','latestnewsController@publish_news')->name('publish_news');




// DIRECTORS 
Route::get('/alldirectors', 'directorController@alldirectors')->name('alldirectors');
Route::get('/add_director', 'directorController@add_director')->name('add_director');
Route::post('/inser_director', 'directorController@inser_director')->name('inser_director');
Route::get('/edit_director/{id}', 'directorController@edit_director')->name('edit_director');
Route::post('/update_director/{id}', 'directorController@update_director')->name('update_director');
Route::get('/delete_director/{id}', 'directorController@delete_director')->name('delete_director');



// pages
Route::get('all-pages','aboutpageController@page')->name('pages');

// about page
Route::post('updateaboutinfo','aboutpageController@updateaboutinfo')->name('updateaboutinfo');
Route::get('disabblebanner/{id}','aboutpageController@disabblebanner')->name('disabblebanner');
Route::get('enablebanner/{id}','aboutpageController@enablebanner')->name('enablebanner');

// objective page
Route::get('objectivepage','objectiveController@objectivepage')->name('objectivepage');
Route::post('updateobinfo','objectiveController@updateobinfo')->name('updateobinfo');
Route::get('disabbleob/{id}','objectiveController@disableob')->name('disableob');
Route::get('enablebeob/{id}','objectiveController@enableob')->name('enableob');


// mission page
Route::get('missionpage','missionController@missionpage')->name('missionpage');
Route::post('updatemission','missionController@updatemission')->name('updatemission');
Route::get('disablemission/{id}','missionController@disablemission')->name('disablemission');
Route::get('enablemission/{id}','missionController@enablemission')->name('enablemission');

// Right and Previllage page
Route::get('rppage','rppageController@rppage')->name('rppage');
Route::post('updaterpinfo','rppageController@updaterpinfo')->name('updaterpinfo');
Route::get('disablerpban/{id}','rppageController@disablerpban')->name('disablerpban');
Route::get('enablerpban/{id}','rppageController@enablerpban')->name('enablerpban');




// EVENTS 
Route::get('/events', 'eventController@events')->name('events');
Route::get('/addevent', 'eventController@addevent')->name('addevent');
Route::post('/insert-event', 'eventController@inser_event')->name('inser_event');
Route::get('/editevent/{id}', 'eventController@editevent')->name('editevent');
Route::post('/updateEvent/{id}', 'eventController@updateEvent')->name('updateEvent');
Route::get('unpublish-event/{id}','eventController@unpublish_event')->name('unpublish_event');
Route::get('publish-event/{id}','eventController@publish_event')->name('publish_event');
Route::get('delete_event/{id}','eventController@delete_event')->name('delete_event');

// PHOTO GALLERY 
Route::get('/pcat', 'galleryController@pcat')->name('pcat');    
Route::get('/addpcat', 'galleryController@addpcat')->name('addpcat');
Route::post('/insertpcat', 'galleryController@insertpcat')->name('insertpcat');
Route::get('/editpcat/{id}', 'galleryController@editpcat')->name('editpcat');
Route::post('/updatepcat/{id}', 'galleryController@updatepcat')->name('updatepcat');
Route::get('/deletepcat/{id}', 'galleryController@deletepcat')->name('deletepcat');


/********** PHOTO GALLERY ************/

Route::get('/photogallery', 'galleryController@photogallery')->name('photogallery');
Route::get('/addgallery', 'galleryController@addgallery')->name('addgallery');
Route::post('/insertgallery', 'galleryController@insertgallery')->name('insertgallery');
Route::get('/editpgallery/{id}', 'galleryController@editpgallery')->name('editpgallery');
Route::post('/updategallery/{id}', 'galleryController@updategallery')->name('updategallery');
Route::get('/deletegallery/{id}', 'galleryController@deletegallery')->name('deletegallery');
Route::get('/unpublish_gallery/{id}', 'galleryController@unpublish_gallery')->name('unpublish_gallery');
Route::get('/publish_gallery/{id}', 'galleryController@publish_gallery')->name('publish_gallery');



/***************************** VIDEO GALLERY ***************************/
Route::get('videogallery','videogalleryController@videogallery')->name('videogallery');
Route::get('addvideovideogallery','videogalleryController@addvideovideogallery')->name('addvideovideogallery');
Route::post('addvideo','videogalleryController@addvideo')->name('addvideo');
Route::get('editgallery/{id}','videogalleryController@editgallery')->name('editgallery');
Route::post('updatevgallery/{id}','videogalleryController@updatevgallery')->name('updatevgallery');
Route::get('deletevideo/{id}','videogalleryController@deletevideo')->name('deletevideo');


/********************************* quick link ****************************/
Route::get('quicklink','quicklinkController@quicklink')->name('quicklink');
Route::get('addlink','quicklinkController@addlink')->name('addlink');
Route::post('insertlink','quicklinkController@insertlink')->name('insertlink');
Route::get('editlink/{id}','quicklinkController@editlink')->name('editlink');
Route::post('update_link/{id}','quicklinkController@update_link')->name('update_link');
Route::get('deletelink/{id}','quicklinkController@deletelink')->name('deletelink');

/*----------------- SPONSOR ------------------*/

Route::get('allsponsor','sponsorController@allsponsor')->name('allsponsor');
Route::get('addsponsor','sponsorController@addsponsor')->name('addsponsor');
Route::post('insertsponsor','sponsorController@insertsponsor')->name('insertsponsor');
Route::get('editsponsor/{id}','sponsorController@editsponsor')->name('editsponsor');
Route::post('updatesponsor/{id}','sponsorController@updatesponsor')->name('updatesponsor');
Route::get('deletesponsor/{id}','sponsorController@deletesponsor')->name('deletesponsor');

Route::get('/deactive_sponsor/{id}', 'sponsorController@deactive_sponsor')->name('deactive_sponsor');
Route::get('/active_sponsor/{id}', 'sponsorController@active_sponsor')->name('active_sponsor');





/****************************************
          MESSAGGES
********************************************/
Route::get('/all-messages','messageController@messages')->name('messages');
Route::get('/addmessage','messageController@addmessage')->name('addmessage');
Route::post('/insetmessage','messageController@insetmessage')->name('insetmessage');
Route::get('editmessage/{id}','messageController@editmessage')->name('editmessage');
Route::post('updatemessage/{id}','messageController@updatemessage')->name('updatemessage');
Route::get('deletemessage/{id}','messageController@deletemessage')->name('deletemessage');
Route::get('/unpublish/{id}', 'messageController@unpublish')->name('unpublish');
Route::get('/publish/{id}', 'messageController@publish')->name('publish');
Route::get('message view/{id}','websiteController@message_view')->name('message_view'); //fontend


/***************************************
     NEWSLATTER
****************************************/
Route::get('newslatter','newslatterController@newslatter')->name('newslatter');
Route::post('insertnewslatterimg','newslatterController@insertnewslatterimg')->name('insertnewslatterimg');
Route::post('insertnewslatterpdf','newslatterController@insertnewslatterpdf')->name('insertnewslatterpdf');
Route::get('view-newslatter','websiteController@view_newslatter')->name('view_newslatter');  //front end view
Route::post('insertsponsorpromote','newslatterController@insertsponsorpromote')->name('insertsponsorpromote'); //sponsor promote



/****************************************
           contact us
********************************************/
Route::get('contact-us','contactusController@contact_us')->name('contact_us');
Route::get('view_contact/{id}','contactusController@view_contact')->name('view_contact');
Route::get('editcontact/{id}','contactusController@editcontact')->name('editcontact');
Route::post('updateContact/{id}','contactusController@updateContact')->name('updateContact');
Route::get('deletecontact/{id}','contactusController@deletecontact')->name('deletecontact');

/****************************************
         SOICAL LINK
********************************************/
Route::get('social','socialController@index')->name('social');
Route::get('addsocial','socialController@addsocial')->name('addsocial');
Route::post('insertsocial','socialController@insertsocial')->name('insertsocial');
Route::get('editsocial/{id}','socialController@editsocial')->name('editsocial');
Route::post('updatesocial/{id}','socialController@updatesocial')->name('updatesocial');

Route::get('/unpublish_social/{id}', 'socialController@unpublish_social')->name('unpublish_social');
Route::get('/publish_social/{id}', 'socialController@publish_social')->name('publish_social');
Route::get('/social_delete/{id}', 'socialController@social_delete')->name('social_delete');

/****************************************
           ORGANIZATION INFORMATION
********************************************/
 Route::get('/about','aboutController@about')->name('about');
 Route::post('/welcomemsg','aboutController@welcomemsg')->name('welcomemsg');
 Route::get('/welcome-single/{id}','websiteController@welcome_single')->name('welcome_single');
 Route::get('/primary','primaryinfoController@index')->name('primary');
 Route::post('/updatelogo','primaryinfoController@updatelogo')->name('updatelogo');
 Route::post('/insertorginfo','primaryinfoController@insertorginfo')->name('insertorginfo');

