<div class="dashboard_sidebar" id="dashboard_sidebar">
<h3 class="dashboard_logo" id="dashboard_logo"><img src="images/logo.png" style="width: 40px"> Factory</h3>
<div class="dashboard_sidebar_user">
    <img src="images/user.jpg" alt="User image." id="userimage"/>
    <span><?= $user['Noun']?></span>

</div>
<div class="dashboard_sidebar_menus">
    <ul class="dashboard_menu_lists">
    <!--------class="menuActive"------->
<li>
    <a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
</li>
<li>
    <a href="./user-add.php"><i class="fa fa-user-plus"></i><span class="menuText"> Add user</span></a>
</li>
    </ul>
</div>
</div>