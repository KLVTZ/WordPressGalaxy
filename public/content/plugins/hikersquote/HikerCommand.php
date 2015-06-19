<?php

/**
 * Prints a greeting. Defaults to --draft=false
 *
 * @synopsis --title=<string> --quote=<string> [--draft]
 */
class HikerCommand extends WP_CLI_Command
{
	public function add($args, $assoc_args)
	{
		extract($assoc_args);		
		wp_insert_post([
			'post_type' => 'post',
			'post_title' => $title,
			'post_content' => $quote,
			'post_status' => !empty($draft) ? 'draft' : 'publish',
		]);

		WP_CLI::success("{$title} was successfully created");
	}
}

WP_CLI::add_command("hiker", "HikerCommand");
