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
	            'value' => 'PBEF (Prosperous Badminton Education Foundation) is a non-profit organization established in May of 2016. The foundation was initially started to fulfill the community’s need to have a place – a community – for badminton enthusiasts to play, learn, improve, socialize, and grow in a safe, positive and caring environment that would cultivate responsible, productive, proactive and benevolent community citizens. Its original name “Modest Grass Badminton Association” was a name that reflected that belief, which was changed to Prosperous Badminton Education Foundation in May 2019 to include all communities that share the same vision and are willing to carry forward the same mission.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'grow_path_p2',
	            'value' => 'The organization’s main focus currently is to foster an equal learning environment for our community through badminton. The community members we currently serve include kids, student, seniors, women, new immigrants and families with different financial barriers. The organization has hosted many of its events at local schools and badminton centres. It now has over 600 people, of which 250 people attend events every week. The growth rate of new members is around 3~5 people a week. Because most badminton centres are located in and near the city of Richmond, the organization’s current events are typically hosted at schools and badminton centres in Richmond. However, plans to expand our services to nearby cities, such as Vancouver, are already underway.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'grow_path_p3',
	            'value' => '',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p1',
	            'value' => 'In the year of 2019, we have participated with 18 elementary schools in Richmond, BC, over 4,000 children are learning and enjoying badminton under our professional supervision.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p2',
	            'value' => 'Congratulations to all staff and volunteers, donors and sponsors who made this great year possible.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p3',
	            'value' => 'Sincerely,',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p4',
	            'value' => 'PBEF. Al Liao, Executive director.',
	            'pageType_id' => '2'
	        ],
	        [
	            'varname' => 'president_p5',
	            'value' => '',
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
	        [
	            'varname' => 'email',
	            'value' => 'ask@pbef.ca',
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
	            'value' => 'Thompson Community Centre',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_left2',
	            'value' => ' 4524（school+community centre）
School ',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_left3',
	            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel euismod augue. Aenean feugiat fermentum velit sit amet tristique. Curabitur pharetra augue leo. Ut eu neque id augue hendrerit finibus. Suspendisse interdum rhoncus mattis. Mauris efficitur turpis sed dui feugiat aliquet.',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'community_right1',
	            'value' => '2019 学校 19间 in richmond 预计2020 41 间 in richmond ',
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
	            'value' => 'Community centre',
	            'pageType_id' => '3'
	        ],

	        [
	            'varname' => 'title_left2',
	            'value' => 'People',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_left3',
	            'value' => 'Title3',
	            'pageType_id' => '3'
	        ],
	        [
	            'varname' => 'title_right1',
	            'value' => 'School',
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
