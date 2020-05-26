<?php

$contacts = [
    'ContactId'      => 1,
    'Name'      	 => 'Sherlock Holmes',
    'Work'     		 => 'Private Detective',
    'Phone'     	 => '38978123456',
    'PhoneTypeId'    => 2,
    'Email' 		 => 'sherlock@holmes.com', 
    'EmailTypeId'    => 1,  
	'GroupId' 		 => 1,
	'Address'        => '221B Baker Street'
];


$PhoneTypeId = [
    1 => [
        'id'    => 1,
        'name'  => 'Mobile'
    ],
    2 => [
        'id'    => 2,
        'name'  => 'Home'
    ],
    3 => [
        'id'    => 3,
        'name'  => 'Work'
    ]
];

$EmailTypeId = [
    1 => [
        'id'    => 1,
        'name'  => 'Home'
    ],
    2 => [
        'id'    => 2,
        'name'  => 'Work'
    ],
    3 => [
        'id'    => 3,
        'name'  => 'Other'
    ]
];

$ContactId = [
    1 => [
        'id'    => 1,
        'name'  => 'Family'
    ],
    2 => [
        'id'    => 2,
        'name'  => 'Friends'
    ],
    3 => [
        'id'    => 3,
        'name'  => 'Colleagues'
    ]
];
?>