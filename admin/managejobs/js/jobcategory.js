var country_arr = new Array("Data Miner-Data Scientist", "Framework Developers", "IT Education", "Management Science", "Menial Jobs", "Programming", "Secretarial", "Software Engineering", "General Duties");





var s_a = new Array();
s_a[0]="";
s_a[1]="Oracle Dbase Admin-Python|MySQL Dbase Admin-Java|NoSQL Dbase Admin|Cross-Platform Admin|Cross Dbase Admin";
s_a[2]="Android Developer|IOS Developer|Assembly Language Developer|Entity Framework-ASPNet|Firmware Developers";
s_a[3]="IT Specialist|Tutor|Classroom Instructor|Lab Technician|Curriculum Developer|IT Counselor";
s_a[4]="Strategy Developer|Marketer|Distributor|Accountant|Clerk|Auditor|PR Officer|Customer Care|Business Researcher";
s_a[5]="Driver|Cleaner|FrontDesk Officer|Cashier|Security";
s_a[6]="Hardware Programmer-Arduoin|Java Programmer|Python Developer|Angular JS Developer|Laravel Developer|PHP Developer";
s_a[7]="Secretary|Receptionist|Messenger";
s_a[8]="Web Developer|Graphic Artist|System Designer|System Analyst|Script Writer-Server-Side|Script Writer-client-Side|Stylist|Algorithm Developer|Logic Analyst|HCI Specialist|Psychology|Penetrator|Hacker";
s_a[9]="Graduates|Graduate Internship|Undergraduate Internship|Internship|Student Attachment|Others";


function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Your Job Category','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select Your Desired Job Position','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}









