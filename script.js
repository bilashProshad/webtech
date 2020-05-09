function triggerClick(){
	document.querySelector('#ProfileImage').click();
}
function displayImage(I){
	if(I.files[0]){
		var reader=new FileReader();
		reader.onload=function(I){
			document.querySelector('#ProfileDisplay').setAttribute('src',I.target.result);
		}
		reader.readAsDataURL(I.files[0]);
	}
	
}
function TutionUpdate(){
	document.forms['search_form_results'].action='UpdateTutionInfo.php';
	document.forms['search_form_results'].submit();
	
}
function AccountSettings(){
	document.forms['search_form_results'].action='Accountsetting.php';
	document.forms['search_form_results'].submit();
	
}
function AdminAccountSettings(){
	document.forms['search_form_results'].action='AdminAccountSetting.php';
	document.forms['search_form_results'].submit();
	
}