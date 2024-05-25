user user@gmail.com 1234567890
admin admin@gmail.com 1234567890

route::get('/home',[AdminController::class,'index']);
route::get('/eReject_page',[AdminController::class,'eReject_page']);

route::post('/add_eReject',[AdminController::class,'add_eReject']);

route::get('/eReject_delete/{id}',[AdminController::class,'eReject_delete']);

route::get('/eReject_edit/{id}',[AdminController::class,'eReject_edit']);


route::post('/update_eReject/{id}',[AdminController::class,'update_eReject']);

route::get('/eReject_print',[AdminController::class,'eReject_print']);