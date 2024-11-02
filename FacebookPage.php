<?php
// models/FacebookAccount.php
class FacebookAccount extends Model
{
    protected $table = 'facebook_rx_fb_user_info';
    protected $fillable = ['fb_id', 'name', 'email', 'access_token', 'user_id', ...];
}

// models/FacebookPage.php
class FacebookPage extends Model
{
    protected $table = 'facebook_rx_fb_page_info';
    protected $fillable = ['page_id', 'page_name', 'page_access_token', 'facebook_rx_fb_user_info_id', ...];
}


php?>
