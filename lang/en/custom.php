<?php

use App\Enums\BasePaymentStatusEnum;
use App\Enums\Phase\PhaseProgressStatusEnum;

return [

    // Dashbaoard
    'dashboard' =>  [
        'dashboard' =>  'Dashboard',
        'pages' =>  'Pages',
        'team_members'  => 'Team Members 👷‍♂️',
        'service_category'  =>  'Service Category',
        'services' =>   'Services',
        'projects'  =>  'Projects',
        'project_category'  =>  'Project Category',
        'clients'   =>  'Clients',
        'about'     =>  'About',
        'contact'   =>  'Contact',
        'settings' =>  'Settings',
        'general'   =>  'General',
        'contacts'  => 'Contacts',
        'jobs'  => 'Jobs',
        'job_titles'  => 'Job Titles',
        'applications'              =>  'Applications',
        'branches'   =>  'Branches',
    ],

    'image' =>  'Image',
    'name'  =>  'Name',
    'email'  =>  'E-mail',
    'phone'  =>  'Phone',
    'title_position'  =>  'Title Position',
    'status'  =>  'Status',
    'facebook'  =>  'Facebook',
    'instagram'  =>  'Instagram',
    'twitter'  =>  'Twitter',
    'linked_in'  =>  'Linked_in',
    'tiktok'    =>          'tiktok',
    'cover_letter'  =>  'Cover Letter',
    'personal_details'  =>  'Personal Details',
    'address'   =>  'Address',
    'category'   =>  'Category',
    'pdf'   =>  'PDF',
    'detials'   =>  'Detials',
    'submit'   =>  'Submit',
    'Actions'   =>  'Actions ',
    'client'    =>  'Client',
    'budget'   =>   'Budget',
    'achieve_date'  => 'Achieve Date',
    'description'   =>  'Description',
    'home_image'    =>  'Home Image',
    'main_image'    =>  'Main Image',
    'about_us_text' =>  'About Us Text',
    'checklist_features'    =>  'Checklist Features',
    'exclusive_design_description'      => 'Exclusive Design Description',
    'pro_team_description'  =>      'Pro Team Description',
    'new'   =>  'New',
    'close' =>  'Close',
    'smthing_wrong' =>  'Something Went Wrong',
    'contact_success_message'   =>  'We Will Be In Touch!',
    'create_success'       =>      'Created Successfully',
    'new_address'   =>  'New Address',
    'address_title' =>  'Title',
    'address_value' =>  'Address',
    'message'   =>  'Message',
    'home_slide_images'     => 'Home Slide Images',
    'home_bottom_image'     => 'Home Bottom Image',
    'delete'        =>  'Delete',
    'Caution'        => 'Attention📢',
    'confirm_delete'    =>  'Are You Sure to delete ',
    'deleted_successflly'  => 'Deleted Successfully',
    'vacancy'   =>  'vacancy',
    'salary'   =>   'Salary',
    'requirements'  =>  'Requirements',
    'hide_salary'   => 'Hide Salary',
    'select'    =>  'Select',
    'applicaion_success_message'    =>  'You Applied Successfully',
    'date'              =>  'Date',
    'main_address'  =>  'Main Address',
    'phone_number'  =>  'Phone Number',
    'company_email' =>  'Company Email',
    'short_description' =>  'Short Description',
    'phone_2'   =>  'Phone 2',
    'phone_3'   =>  'Phone 3',
    'whatsaap_number'   =>  'Whatsapp Number',
    'snapchat'  =>  'Snapchat',
    'youtube'   =>  'Youtube',
    'site'  =>  [
        'SERVICES'  =>  'SERVICES',
        'HOME'  =>  'HOME',
        'PROJECTS'  =>  'PROJECTS',
        'ABOUT'  =>  'ABOUT',
        'CONTACT'  =>  'CONTACT',
        'BRANCHES'  =>  'BRANCHES',
        'DESINGS'  =>  'DESINGS',
        'JOBS'  =>  'JOBS',
        'RAMADAN'    =>  '🌙RAMADAN',
        'Call Anytime'  =>  'Call Anytime',
        'Newsletter'    =>  'Newsletter',
        'newsletter_text'  =>  'Join Our Community And Start Receiving Our News And Updates',
        'copy_rights'   =>  "  Copyright &copy; 2023 <a href='".route('site.home')."'>SIVEC</a>
        All rights reserved.",
        'Quick Links'   =>  'Quick Links',
        'Interior Design'           =>      'Interior Design',
        'Engineering Consulting'           =>      'Engineering Consulting',
        'Skilled Team'           =>      'Skilled Team',
        'Low Cost'           =>      'Low Cost',
        'Award Winner'           =>      'Award Winner',
        'Trusted Work'           =>      'Trusted Work',
        'about_sivec'           =>          'About Our Company',
        'about_we_provide_text_1'     =>      'Providing the best',
        'about_we_provide_text_2'     =>      '&interior design services',
        'Exclusive Design'          =>      'Exclusive Design' ,
        'Professional Team'          =>      'Professional Team' ,
        'We have more than years of experience'     =>  'We have more than years of experience',
        'our_services'      =>  'Our Services',
        'We Provide'    =>  'We Provide' ,
        'All'    =>  'All' ,
        'services_you_need'      =>      'Services You Need',
        'sivec' =>  'SIVEC',
        'our_services_text'       =>    'Difficult challenges are our passion, so we decided to expand and assist in construction and development, which has already reflected its effects positively on the citizen. We were also keen to expand its business in the Emirates and carried on it mainly service and construction projects, using the latest means and competitive prices that suit the capabilities of the people of the Emirates',

        'Design'        =>  'Design',
        'Contact With Us'       =>  'Contact with us and get a free Consultation',
        'We are ready to help you'       =>  'We are ready to help you',
        'need_help'       =>  'Need Help?',
        'get_in_touch'      =>              'Get In Touch',
        'have_question'     =>                'Have Any Questions?',
        'our_branches'      =>          'Our Company Branches',
        'Branches'      =>          'Branches',
        'we_have_mutli'          =>          'We Have Multiple',
        'UAE'               =>     'In United Arab Emirates',
        'UAE'               =>     'In United Arab Emirates',

        'slide_1'     =>  'Welcome to Fascinating world of Design ',

        'slide_2'     =>  'Every Detail is Magnificent',

        'slide_3'     =>  'Your Luxury House in Modern',

        'slide_4'     =>  'Add your Magic touch in your house',

        'slide_5'     =>  "Not just Building .. we're being creative for you",

        'slide_6'     =>  "Let's Make your house a wonderful painting",

        'slide_7'     =>  'Every Design Has a Story',

        'slide_8'     =>  "You Can Find Variety of the Best Designs",
        'read_more'     =>  'Read More',
        'enter_email'       =>  'Enter your email',
        'our_experince'     =>          'We Have Experince',
        'get_solutions'     =>  'Get Easy Solutions',
        'take_look'         =>    '<span>Visit Our Catalog Through Whatsapp from <a href="'."https://wa.me/c/971543018342".'" style="color:black;" target="_blank">here</a></span>',
        'Contact With Us_slider'        =>              'Contact Us',
        'our_company'       =>  'Our Company',
        'make_u'            =>  'Make You',
        'feel_conf'         =>  'Feel More Confident',
        'offer_text'        =>  'We always look forward to presenting all that is new in terms of innovative and accurate designs at the hands Of the most skilled competencies of architects and the latest engineering programs to make the best possible Use of spaces and show the aesthetics of design, which is a vital matter that helps our customers to better Understand their project from an early stage until its completion. We are also able to implement all plans With the appropriate capabilities for each client',
        'why_us'            =>      'Why You Choose Us?',
        'transparency'      =>       'Transparency',
        'transparency_text'      =>       'We are distinguished by achieving the highest ethical standards in all aspects of our business. Our customers are the foundation of our business and their satisfaction is our ultimate goal.',
        'teamwork'          =>  'TeamWork',
        'teamwork_text'    => 'We cooperate - we listen - we exchange information openly within the office and with our clients, and each of us alone represents an image of our company',
        'achievement'      =>   'Achievement',
        'achievement_text'      =>   'We are committed to providing a professional level of services that meets the aspirations of our customers to complete projects on time',
        'innovation'        =>  'Innovation',
        'innovation_text'        =>  'We always look at merit and strive to apply innovative engineering solutions to provide the highest level of service',
        'ramdan_page_title'     =>  'Ramadan Kareem!',
        'ramadan_greetings' =>  'Wishing you a blessed Ramadan from all of us at SIVEC 🌙',
        'ramdan_offers_title'       =>  'Ramadan Exclusive Offers',
        'ramdan_offers_text'        =>  'SIVEC Exclusive Offers For Ramadan',
        'slide_ramadan'             =>  'Wishing you a blessed Ramadan ',
        'ramdan_working_hours'      =>    'Working Hours During Ramadan 🕓',
        'ramdan_working_hours_text' =>     'We are Always With You During Ramadan',
        'catalog'                   =>      'CATALOG',
    ],

];
