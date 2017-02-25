<!--Menu Bar-->
<div id="cartButtons" class="dropdown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="list" id="list" accesskey="target">
    <option value='none' selected>Browse Categories</option>
    <option value="science.php">science</option>
    <option value="romance.php">romance</option>
    <option value="comedy.php">comedy</option>
    <option value="horror.php">horror</option>
<select>
<input type=button value="Go" onclick="goToNewPage()" />
<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="cartNavigation">
		<a href="viewCart.php">View Cart</a>
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="cartNavigation">
		<a href="trackOrder.php">Track Progress Of a Transaction</a>
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="cartNavigation">
		<a href="viewCart.php?destroy=true">Sign Out</a>
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="cartNavigation">
		<a href="#"><b><i>User : <u><?php echo $_SESSION['username']; ?></u></i></b></a>
	</button>
</div><br />

<style>
	
.cartNavigation a{
	color: white;
	text-decoration: none;
	font-weight: bold;
	padding: 10px;
}

.cartNavigation{
	padding: 10px;
	background-color: black;

}

.cartNavigation:hover{
	color: black;
	background-color: orange;
}

.cartNavigation a:hover{
	color: black;
	background-color: orange;
	font-weight: bold;
}

#cartButtons{
	margin-left: 15%;
}

</style>