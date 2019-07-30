<?php

use Illuminate\Database\Seeder;

class PageContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('page_contents')->insert([

        	//home
	        [
	            'varname' => 'home_content1',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '1',
	        ],
	        [
	            'varname' => 'home_content2',
	            'value' => 'We are a non-profit foundation located in Richmond, British Columbia. We support sporting community and programs in their endeavours to provide equal opportunities to everyone who wishes to participate in sports.
                  	',
	            'pageType_id' => '1'
	        ],
	        [
	            'varname' => 'home_content3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '1'
	        ],

	        //about us
	        [
	            'varname' => 'grow_path_p1',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'grow_path_p2',
	            'value' => '',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'grow_path_p3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p1',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p2',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'contact_p',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '2'
	        ],

	        [
	            'varname' => 'location',
	            'value' => '2231 Kingsway Ave., Burnaby, B.C.',
	            'pageType_id' => '2'
	        ],

	        [
	            'varname' => 'phone',
	            'value' => '+1(778)-778-7788',
	            'pageType_id' => '2'
	        ],


	        //projects
	        [
	            'varname' => 'step1',
	            'value' => ' ipsum dolor sit amet, consectetur adipiscing elit.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'step2',
	            'value' => ' dolor sit amet, consectetur adipiscing elit.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'step3',
	            'value' => 'sit amet, consectetur adipiscing elit.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'step4',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_left1',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_left2',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_left3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_right1',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_right2',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_right3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'title_left1',
	            'value' => 'Title1',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'title_left2',
	            'value' => 'Title2',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_left3',
	            'value' => 'Title3',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_right1',
	            'value' => 'Title4',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_right2',
	            'value' => 'Title5',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_right3',
	            'value' => 'Title6',
	            'pageType_id' => '3'
	        ],


	        // public info
	        [
	            'varname' => 'people_donated',
	            'value' => '3012',
	            'pageType_id' => '4'
	        ],

	        [
	            'varname' => 'joined_us',
	            'value' => '3021',
	            'pageType_id' => '4'
	        ],

	        [
	            'varname' => 'total_values',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '4'
	        ],

	        [
	            'varname' => 'total_amount',
	            'value' => '302,123',
	            'pageType_id' => '4'
	        ],


	    ]);
	}
}
