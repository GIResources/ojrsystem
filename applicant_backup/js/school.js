var country_arr = new Array("University", "Polytechnic", "College of Education", "Monotechnics");





var s_a = new Array();
s_a[0]="";
s_a[1]="University of Uyo|University of Agriculture Umuahia|University of Lagos|University of England|University of Ghana|University of Maiduguri|University of Nigeria Nsukka|Federal University Lafia|Enugu State University|Akwa Ibom State University |Benue State University";
s_a[2]="Dorben Polytechnic Abuja|Nasarawa State Polytechnic Lafia|Akwa Ibom State Polytechnic|Gombi State Polytechnic|Kaduna Polytechnic|Yaba College of Technology Lagos";
s_a[3]="Federal College of Education Kaura|Akwa Ibom State College of Education|College of Education Enugu|College of Education Gombe";
s_a[4]="Institute of Management Science Uyo|IMFI Academy Uyo|Petroleum Training Institute";


function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Your Tertiary School Category','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Select Your Institution','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}









