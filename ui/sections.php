<?php

class SectionForReviewsAndComments extends SmartDiv{
    public function __construct()
    {
        parent::__construct();
        $this->add_child(ui::kickers()->news())->font_weight_bold();
        $this->border("1px solid #ccc")->margin_top("-1px")->padding("1.0em");

        $item = new SmartDiv();
        $item->add_child("this is some text for the post in the list")->padding("0.5em 0em")->border_bottom("1px solid #eee");
        $this->add_child($item->repeatNtimes(5)->asDiv()->font_weight_normal());

    }
}

class SectionForPreNav extends LayoutForNColumns{
    public function __construct()
    {
        parent::__construct();


        $this->addNewColumn()->add_child(ui::images()->logo()->width_100percent()->toLink(ui::urls()->home())->display_block())->width("45%")->display_inline_block()->vertical_align_top()->margin_top("-30px")->margin_left("-30px");
        $this->addNewColumn()->add_child(ui::sections()->searchForCars())->width("55%")->display_inline_block()->vertical_align_top();
        return $this;

    }
}

class SectionForTopNav extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $recent_views = new SmartSpan();
        $recent_views->add_child("Menu item")->background_color("#333")->
        color(ui::colors()->white())->
        font_weight_bold();
        $recent_views->border("1px solid #ccc")->padding("1.0em")->display_inline_block()->margin_top("-1px")->margin_left("-1px");
        $result = $recent_views->repeatNtimes(5);
        $wrapper = $result->asDiv();
        $wrapper->margin_left("1px")->margin_bottom("8px");
        $this->add_child($wrapper);

    }
}

class SectionForNewsAndInformation extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

    }
}

class SectionForExporterReviews extends LayoutForNColumns{

    public function __construct($reader)
    {
        parent::__construct();
        $this->addNewColumn()->add_child(ui::kickers()->exporter_reviews())->font_weight_bold()->display_inline_block();
        $this->addNewColumn()->add_child(ui::lists()->exporter_reviews($reader));
    }
}
class SectionForMostRecentPostsPerCategory extends LayoutForNColumns{
    public function __construct($reader)
    {
        parent::__construct();
        //$this->addNewColumn()->add_child(ui::kickers()->quick_facts())->font_weight_bold()->display_inline_block();
        $this->addNewColumn()->add_child(ui::lists()->most_recent_post_per_category($reader));
    }
}

class SectionForTipsAndAdvice extends SmartDiv{
    public function __construct()
    {
        parent::__construct();
        
        $this->add_child(ui::kickers()->car_exporters())->font_weight_bold();
        $this->border("1px solid #ccc")->margin_top("-1px")->padding("1.0em");

        $item = new SmartDiv();
        $item->add_child("this is some text for the post in the list")->padding("0.5em 0em")->border_bottom("1px solid #eee");
        $this->add_child($item->repeatNtimes(5)->asDiv()->font_weight_normal());       

    }
}

class SectionForOnGoingDiscusssions extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $this->add_child(ui::kickers()->car_maintenance())->font_weight_bold();
        $this->border("1px solid #ccc")->margin_top("-1px")->padding("1.0em");

        $item = new SmartDiv();
        $item->add_child("this is some text for the post in the list")->padding("0.5em 0em")->border_bottom("1px solid #eee");
        $this->add_child($item->repeatNtimes(5)->asDiv()->font_weight_normal());

    }
}

class SectionForMostRecentReview extends LayoutForTwoColumns{
    /** @param \ReaderForValuesStoredInArray $reader */
    public function __construct($reader)
    {
        ui::exception()->throwIfNotReader($reader);
        parent::__construct();

        //$img = new SmartImage("proto_data/car_images/2015-Rolls-Royce-Ghost-Series-II-main_rdax_646x396.jpg","100%");
        $img = ui::urls()->asset("jag1-620x350.jpg")->toImage()->width_100percent();
        
        $kicker = new SmartSpan();
        $kicker->background_color("#000")->
        color(ui::colors()->white())->font_weight_bold()->padding("8px 1.0em");
        $kicker->add_child("FEATURED");

        $headline = new SmartHeading3();
        $headline->add_child($reader->title());
        $headline->padding_left("1.0em")->margin("0px");

        $body = new SmartParagraph();
        $body->add_child(
            SmartUtils::limit_text_to_length(
                $reader->content() /*file_get_contents("proto_data/2015-Rolls-Royce-Ghost-Series-II-main_rdax_646x396.txt")*/,
                200
            )
        );

        $link_for_continue_reading = ui::links()->view_post($reader->file_name())->add_child("Continue reading&nbsp;&rarr;");

        
        $this->leftColumn()->add_child($img)->display_inline_block()->width("50%")->vertical_align_top();
        //$this->rightColumn()->add_child($kicker->margin_left("1.0em")->margin_top("8px")->display_inline_block());
        $this->rightColumn()->add_child($headline)->display_inline_block()->width("50%")->vertical_align_top();

        $this->rightColumn()->add_child($body->padding_left("1.0em")->margin("0px")->margin_top("1.0em"));
        $this->rightColumn()->add_child($link_for_continue_reading->padding_left("1.0em"));
        

    }
}

class SectionForTheAfricanExperience extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $this->add_child("The African Experience - Views from Africa");
        $this->border("1px solid #ccc")->padding("1.0em")->margin_top("-1px");
    }
}
class SectionForCarOfTheWeek extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $this->add_child("Car of the week");
        $this->border("1px solid #ccc")->padding("1.0em")->margin_top("-1px");
    }
}

class SectionForCarsYouMightLike extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $this->add_child("Cars you might like")->font_weight_bold();
        $this->border("1px solid #ccc")->margin_top("-1px")->padding("1.0em");

        $item = new SmartDiv();
        $item->add_child("this is some text for the post in the list")->padding("0.5em 0em")->border_bottom("1px solid #eee");
        $this->add_child($item->repeatNtimes(5)->asDiv()->font_weight_normal());
    }
}

class SectionForSearchForCars extends SmartDiv{
    public function __construct()
    {
        parent::__construct();

        $text_input = new TextInput();
        $text_input->placeholder("Search For Cars - results show reviews, etc");
        $text_input->width_100percent();

        $this->add_child($text_input);
        $this->border("0px solid #ccc")->padding("1.0em")->margin_top("-1px");
    }
}

class SectionForPostArticles extends SmartDiv{
    public function __construct()
    {
        parent::__construct();
        $this->add_child(ui::links()->adminPage()->add_child("Post or Update content"));
        $this->border("1px solid #ccc")->padding("1.0em")->margin_top("-1px")->background_color("#ffc");
    }
}

class SectionForTheFooter extends SmartDiv{
    
    public function __construct($reader_for_current_user)
    {
        parent::__construct();
        
        //------ social media links
        $layout = new LayoutForNColumns();
        
        //===================

        $row = (new LayoutForTwoColumns());
        $row->leftColumn()->add_class(ui::css_classes()->page_footer_row1_col1());
        $row->rightColumn()->add_class(ui::css_classes()->page_footer_row1_col2());

        $row->rightColumn()->add_child(
            ui::html()->div()->add_child(
                ui::html()->heading3()->add_child("Contacts")->set_id(ui::section_ids()->contact_info()).
                ui::sections()->contact_info()
            )

        )->margin_bottom("8px")->padding_bottom("8px");

        $row->leftColumn()->add_child($this->footerLinks($reader_for_current_user));

        $row_2 = $this->copyright_info()->text_align_center();

        $this->add_child($row);
        $this->add_child($row_2);
        
        $this->add_class(ui::css_classes()->page_footer());
    }

    private function copyright_info()
    {
        return ui::html()->div()->add_child(
            sprintf("Copyright &copy; %s - www.skyvoltcars.com. All Rights Reserved",date('Y'))
        )->border_top("0px solid #eee")->padding_top("8px");
    }

    /** @param \ReaderForValuesStoredInArray $reader_for_current_user */
    private function footerLinks($reader_for_current_user)
    {
        $links = new LayoutForNRows();
        $links->addNewRow()->add_child_if(
            $reader_for_current_user->email_address(),
            ui::links()->adminPage()->add_child("Control Panel")
        );
        $links->addNewRow()->add_child_if_else(
            $reader_for_current_user->email_address(),
            ui::forms()->logout(),
            ui::links()->login()->add_child("Login")->add_class(ui::css_classes()->footer_link())
        );

        $links->addNewRow()->add_child(
            ui::urls()->about()->toLink()->add_child("About")->add_class(ui::css_classes()->footer_link())
        );
        $links->addNewRow()->add_child(
            ui::urls()->contacts_us()->toLink()->add_child("Contact Us")->add_class(ui::css_classes()->footer_link())
        );
        $links->addNewRow()->add_child(
            ui::urls()->privacy_policy()->toLink()->add_child("Privacy Policy")->add_class(ui::css_classes()->footer_link())
        );

        $links->addNewRow()->add_child(new SocialMediaLinks());
        return $links;
    }
}

class SectionForAdminNavigationBox extends LayoutForNRows{
    public function __construct()
    {
        parent::__construct();

        $this->addNewRow()->add_child(ui::html()->heading3()->add_child("ADD NEW"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("Car Review"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("Exporter Review"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("Other Post"));

        $this->addNewRow()->add_child(ui::html()->heading3()->add_child("VIEW"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("Posts"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("Statistics"));
        //$this->addNewRow()->add_child(ui::);
    }
}

class SectionForTotalContent extends LayoutForNRows{
    public function __construct()
    {
        parent::__construct();

        $this->addNewRow()->add_child(ui::html()->heading3()->add_child("Right Now"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("68 Posts"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("39 pages"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("12 Categories"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("7 Tags"));        
    }
}

class SectionForTotalDiscussions extends LayoutForNRows{
    public function __construct()
    {
        parent::__construct();

        $this->addNewRow()->add_child(ui::html()->heading3()->add_child("Discussions"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("9 Comments"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("7 Approved"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("2 pending"));
        $this->addNewRow()->add_child(ui::links()->manage_posts()->add_child("0 Spam"));        
    }
}
class SectionForArticleDetails extends LayoutForNRows{
    /** @param \ReaderForValuesStoredInArray $reader */
    public function __construct($reader)
    {
        
        $section_id_algos = (new FactoryForSectionAlgorithms($reader->section_id()))->implementor();

        ui::exception()->throwIfNotReader($reader);
        parent::__construct();

        $this->addNewRow()->add_child(
            ui::html()->div()->add_child("POSTED - ". ui::date_from_timestamp($reader->timestamp()))
        )->border_bottom(ui::_1px_dashed_ddd())->color(ui::colors()->orange())->font_weight_bold()->padding_bottom("0.5em");
        $this->addNewRow()->add_child(ui::html()->heading1()->add_child($reader->title()))->font_variant("initial");
        $this->addNewRow()->add_child(new HorizontalEngagementStatistics($reader));

        $left_image = $section_id_algos->leftImage($reader);
        $this->addNewRowIf($left_image)->add_child($left_image)->max_width($this->get_max_width_for_image());

        $this->addNewRow()->add_child(ui::html()->paragraph()->add_child($reader->content()))->add_class(ui::css_classes()->paragraph_text());
        
    }

    protected function get_max_width_for_image()
    {
        return "100%";
    }
}
class SectionForArticleDetailsInPreviewMode extends SectionForArticleDetails{
    protected function get_max_width_for_image()
    {
        return "200px";
    }
}


class GlobalNavigationForAdmin extends SmartDiv{
    private function wrap_text($string)
    {
        $inner_text = ui::html()->span()->add_child($string)->width_auto();

        $list_item = new SmartListItem();
        $list_item->add_child($inner_text);
        $list_item
            ->set_style("list-style-image",
                sprintf("url(%s)", ui::urls()->asset("admin_item.png"))
            )
            ->set_style("list-style-position","outside")
        ;
        $list_item->margin_left("3.5em")->width_auto()->padding("0.5em 0px")->font_variant("all-small-caps");
        return $list_item;

    }
    public function __construct()
    {
        parent::__construct();

        $menu = new LayoutForNColumns();

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarReviews()->
            add_child(
                $this->wrap_text("Car reviews")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminExporterReviews()->add_child(
                $this->wrap_text("Exp. reviews")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarExporters()->add_child(
                $this->wrap_text("Exporters")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarNews()->add_child(
                $this->wrap_text("News")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminJobs()->add_child(
                $this->wrap_text("Jobs")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarMaintenance()->add_child(
                $this->wrap_text("Maintenance")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCars()->add_child(
                $this->wrap_text("Cars")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarVideos()->add_child(
                $this->wrap_text("Car Videos")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminCarPictures()->add_child(
                $this->wrap_text("Car Pictures")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminViewPosts()->add_child(
                $this->wrap_text("Drafts")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminViewPostsPublished()->add_child(
                $this->wrap_text("Published")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());

        $menu->addNewColumn()->add_child(
            ui::links()->adminStatistics()->add_child(
                $this->wrap_text("Statistics")
            )
        )->add_class(ui::css_classes()->item_host_for_admin_navigation());


        //$this->addNewRow()->add_child("MORE OPTIONS");
        $this->add_child(
            ui::html()->div()->add_child(
                ui::h2_with_contrast_colors("FULL","MENU")
                .
                ui::html()->div()->add_child($menu)->
                background_color(ui::colors()->white())->
                padding_top("0.5em")
            )->background_color(ui::colors()->form_bg())->
            padding("0.5em 2.0em")->padding_bottom("1.5em")
        )->max_width("800px")->margin_auto();

    }

}

class SectionForEditPost extends LayoutForTwoColumns{
    public function __construct($reader_for_post,$reader_for_extended_post_tokens)
    {
        ui::exception()->throwIfNotReader($reader_for_post);
        ui::exception()->throwIfNotReader($reader_for_extended_post_tokens);
        
        parent::__construct();

        $this->leftColumn()->width("66%");
        $this->rightColumn()->width("33%");


        $this->leftColumn()->add_child(
            $this->getLeftContent($reader_for_post, $reader_for_extended_post_tokens)
                ->add_class(ui::css_classes()->element_with_box_shadow())->border(ui::_1px_solid_form_border())->margin("1.0em 0.1em")
        );
        

        $this->rightColumn()->add_child(
            $this->getRightContent($reader_for_post)
                ->add_class(ui::css_classes()->element_with_box_shadow())->border(ui::_1px_solid_form_border())->margin("1.0em 0.1em")
        );
    }

    //todo: override depending on type of content
    private function getLeftContent($reader_for_post, $reader_for_extended_post_tokens)
    {
        return ui::html()->div()->add_child(
            ui::sections()->article_details_in_preview_mode($reader_for_post).
            ui::sections()->extended_post_tokens($reader_for_extended_post_tokens)
        );
    }

    //todo: override depending on type of content
    private function getRightContent($reader_for_post)
    {
        return ui::html()->div()->add_child(
            ui::sections()->actions_for_edit_post($reader_for_post)
        )
            ->add_class(ui::css_classes()->card_background())
            ->add_class(ui::css_classes()->card_border_bottom())
            ->add_class(ui::css_classes()->card_border_right())
            ->add_class(ui::css_classes()->card_margin())
            ->add_class(ui::css_classes()->card_padding());
    }
}
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
class SectionAlgorithms{
    function linkForAdminEditPostTitle($file_name){
        return ui::links()->adminEditPostTitle($file_name)->add_child(
            ui::images()->edit_icon()->max_width("32px")->vertical_align_middle().
            "&rarr;Change Title or SECTION"
        );
    }
    function linkForAdminEditPostIntro($file_name){
        return  ui::links()->adminEditPostContent($file_name)->add_child(
            ui::images()->edit_icon()->max_width("32px")->vertical_align_middle().
            "&rarr;Edit Introduction"
        );
    }
    function linkForAdminEditPostFullDetails($file_name){
        return ui::links()->adminEditExtendedPostContent($file_name)->add_child(
            ui::images()->edit_icon()->max_width("32px")->vertical_align_middle().
            "&rarr;Edit full details"
        );
    }
    function formForEditPostPicture($reader_for_post){
        return ui::forms()->edit_post_picture($reader_for_post);
    }
    
    function formForEditPostVideo($reader_for_post){}

    function leftImage($reader_for_post){
        $file_name = $reader_for_post->picture_file_name();
        return $file_name ?  ui::urls()->view_image($file_name)->toImage() : "No Photo";
    }

}
class SectionAlgorithmsForCarVideos extends SectionAlgorithms{
    function linkForAdminEditPostIntro($file_name){}
    function linkForAdminEditPostFullDetails($file_name){}
    function formForEditPostPicture($reader_for_post){}

    function formForEditPostVideo($reader_for_post){
        return ui::forms()->edit_post_video($reader_for_post);
    }
    
    /** @param \ReaderForValuesStoredInArray $reader_for_post */
    function leftImage($reader_for_post){        
        return new LinkToYoutubeVideoUsingIFrame($reader_for_post->youtube_video_id());
    }
}

class SectionAlgorithmsForCarPictures extends SectionAlgorithms{
    function linkForAdminEditPostIntro($file_name){}
    function linkForAdminEditPostFullDetails($file_name){}
    //function formForEditPostPicture($reader_for_post){}

}

class FactoryForSectionAlgorithms{
    private $implementor;

    /** @return SectionAlgorithms */
    public function implementor(){
        return $this->implementor;
    }
    public function __construct($section_id)
    {
        switch ($section_id){
            case app::section_ids()->car_videos():
                $this->implementor = new SectionAlgorithmsForCarVideos();
            break;

            case app::section_ids()->car_pictures():
                $this->implementor = new SectionAlgorithmsForCarPictures();
                break;

            default:
                $this->implementor =  new SectionAlgorithms();
            break;
        }
    }
}
//todo: override depending on type of content
class ListOfActionsForEditPost extends LayoutForNRows{
    public function __construct($reader_for_post)
    {
        ui::exception()->throwIfNotReader($reader_for_post);
        parent::__construct();
        
        $section_algos = (new FactoryForSectionAlgorithms($reader_for_post->section_id()))->implementor();


        $file_name = $reader_for_post->file_name();

        /*$this->addNewRow()->add_child(
            ui::links()->adminEditCarExporterSelected($file_name)->add_child("&rarr;Choose Car Exporter To Review")
        );*/

        /*$this->addNewRow()->add_child(
            ui::links()->adminEditCarDescription($file_name)->add_child("&rarr;Choose Car To Review")
        );*/


        $title_gui = $section_algos->linkForAdminEditPostTitle($file_name);
        $this->addNewRowIf($title_gui)->add_child($title_gui)->border_bottom(ui::_1px_solid_form_border())->padding_bottom("0.5em")->margin_bottom("0.5em");

        $intro_gui = $section_algos->linkForAdminEditPostIntro($file_name);
        $this->addNewRowIf($intro_gui)->add_child($intro_gui)->border_bottom(ui::_1px_solid_form_border())->padding_bottom("0.5em")->margin_bottom("0.5em");

        $full_details_gui = $section_algos->linkForAdminEditPostFullDetails($file_name);
        $this->addNewRowIf($full_details_gui)->add_child($full_details_gui)->border_bottom(ui::_1px_solid_form_border())->padding_bottom("0.5em")->margin_bottom("0.5em");

        $form_for_edit_post_picture = $section_algos->formForEditPostPicture($reader_for_post);
        $this->addNewRowIf($form_for_edit_post_picture)->add_child($form_for_edit_post_picture)->margin_bottom("0.5em");

        $form_for_edit_post_video = $section_algos->formForEditPostVideo($reader_for_post);
        $this->addNewRowIf($form_for_edit_post_video)->add_child($form_for_edit_post_video)->border_bottom("8px solid #eee")->margin_bottom("16px");


        $this->addNewRow()->add_child(
            ui::forms()->publish_post($file_name)
        );

        $this->addNewRow()->add_child(
            ui::forms()->delete_post($file_name)
        );


    }
}
