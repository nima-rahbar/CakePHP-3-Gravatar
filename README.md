# CakePHP-3-Gravatar
Get Gravatar Image

Copy GravatarHelper To <b>App/src/View/Helper</b>.
<br>
<br>
Add helper in <b>app/src/View/AppView.php</b>:<br>
<code>$this->loadHelper("Gravatar");</code>
<br>
Call it anywhere in your <b>views</b>:<br>
<code>$this->Gravatar->get_gravatar('Email Address', 'Image Width & Height', 'Default Image', 'Image Rate', 'With Image Tag or Not (true/false)');</code>
