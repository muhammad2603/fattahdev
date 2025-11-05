<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    // Default method
    public function index(): string
    {
        // Connection to Database
        $db = db_connect();
        // Get data record on field experiences with Tools
        $experiences = $db->query("SELECT `e`.`title`, `e`.`description`, `e`.`periods`, `e`.`links`, GROUP_CONCAT(`t`.`name`) AS `tools` FROM `experiences` `e` JOIN `experience_tools` `pt` ON `pt`.`experience_id`=`e`.`id` JOIN `tools` `t` ON `t`.`id`=`pt`.`tool_id` GROUP BY `e`.`title`")->getResultArray();
        // Get data record on field projects with Tools
        $projects = $db->query("SELECT `p`.`image_url`, `p`.`title`,`p`.`description`, `p`.`link`, GROUP_CONCAT(`t`.`name`) AS `tools` FROM `projects` `p` JOIN `project_tools` `pt` ON `pt`.`project_id`=`p`.`id` JOIN `tools` `t` ON `t`.`id`=`pt`.`tool_id` GROUP BY `p`.`title`")->getResultArray();
        // Set data for sending to view
        $data = [
            'title' => 'FattahillahDev Website',
            'tailwind_class' => [
                'white_color' => 'text-sky-50/95',
            ],
            'projects_list' => $projects,
            'experiences_list' => $experiences
        ];
        // Close connection to Database
        $db->close();
        // Return view homepage with data
        return view('homepage', $data);
    }
}
