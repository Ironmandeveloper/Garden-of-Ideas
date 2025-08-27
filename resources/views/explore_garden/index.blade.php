@extends('layouts.explore_garden_layout')
@section('content')>
<style>
    #status-[id] {
    font-size: 0.8rem;
    color: #cde6cd; /* soft greenish tone */
}
</style>
<div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-post-type="page">
          <div class="elementor-element elementor-element-f3ef2c6 main-banner e-flex e-con-boxed e-con e-parent" data-id="f3ef2c6" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
              <div class="elementor-element elementor-element-9b537f6 elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading" data-id="9b537f6" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">
                    Explore The Garden
                  </h2>
                </div>
              </div>
              <div class="elementor-element elementor-element-593c853 elementor-widget__width-initial elementor-widget elementor-widget-n-accordion" data-id="593c853" data-element_type="widget" data-settings="{&quot;default_state&quot;:&quot;all_collapsed&quot;,&quot;max_items_expended&quot;:&quot;one&quot;,&quot;n_accordion_animation_duration&quot;:{&quot;unit&quot;:&quot;ms&quot;,&quot;size&quot;:400,&quot;sizes&quot;:[]}}" data-widget_type="nested-accordion.default">
                <div class="elementor-widget-container">
                  <div class="e-n-accordion" aria-label="Accordion. Open links with Enter or Space, close with Escape, and navigate with Arrow Keys">
                    <details id="e-n-accordion-item-9350" class="e-n-accordion-item" style="" open="">
                      <summary class="e-n-accordion-item-title" data-accordion-index="1" tabindex="0" aria-expanded="true" aria-controls="e-n-accordion-item-9350">
                        <span class="e-n-accordion-item-title-header"><div class="e-n-accordion-item-title-text">
                            How It Works
                          </div></span>
                        <span class="e-n-accordion-item-title-icon">
                          <span class="e-opened"><i aria-hidden="true" class="icon icon-arrow-point-to-down"></i></span>
                          <span class="e-closed"><i aria-hidden="true" class="icon icon-arrow-point-to-down"></i></span>
                        </span>
                      </summary>
                      <div role="region" aria-labelledby="e-n-accordion-item-9350" class="elementor-element elementor-element-e2f8b05 e-con-full e-flex e-con e-child" data-id="e2f8b05" data-element_type="container">
                        <div role="region" aria-labelledby="e-n-accordion-item-9350" class="elementor-element elementor-element-935ebe5 e-flex e-con-boxed e-con e-child" data-id="935ebe5" data-element_type="container">
                          <div class="e-con-inner">
                            <div class="elementor-element elementor-element-5746704 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="5746704" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                <p>
                                  Step into a thriving ecosystem of creativity
                                  and possibility. The Garden is a collection of
                                  ideas shared by visionaries like you, waiting
                                  to be nurtured. Browse through diverse
                                  concepts across categories—from innovative
                                  solutions to whimsical creations—and find the
                                  one that speaks to you. Whether you’re looking
                                  for inspiration, a project to collaborate on,
                                  or a dream to bring to life, this is your
                                  space to connect, contribute, and grow.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </details>
                  </div>
                </div>
              </div>
              {{-- <div class="elementor-element elementor-element-9b549e9 e-grid e-con-full e-con e-child" data-id="9b549e9" data-element_type="container">
                <div class="elementor-element elementor-element-fe5bbf5 elementor-widget elementor-widget-search-filter-field" data-id="fe5bbf5" data-element_type="widget" data-settings="{&quot;search_filter_field&quot;:&quot;field_1&quot;}" data-widget_type="search-filter-field.default">
                  <div class="elementor-widget-container">
                    <div class="search-filter-base search-filter-field search-filter-field--id-1 search-filter-field--type-choice search-filter-field--input-type-select search-filter-style--id-1 search-filter-style--choice-select" data-search-filter-settings="{&quot;attributes&quot;:{&quot;queryId&quot;:&quot;1&quot;,&quot;type&quot;:&quot;choice&quot;,&quot;label&quot;:&quot;Categories&quot;,&quot;showLabel&quot;:&quot;yes&quot;,&quot;showDescription&quot;:&quot;no&quot;,&quot;description&quot;:&quot;&quot;,&quot;inputType&quot;:&quot;select&quot;,&quot;placeholder&quot;:&quot;Categories&quot;,&quot;dataPostTypes&quot;:[],&quot;dataPostStati&quot;:[&quot;publish&quot;],&quot;multiple&quot;:&quot;no&quot;,&quot;inputOptionsAddDefault&quot;:&quot;yes&quot;,&quot;inputOptionsDefaultLabel&quot;:&quot;All Categories&quot;,&quot;hideEmpty&quot;:&quot;no&quot;,&quot;showCount&quot;:&quot;yes&quot;,&quot;showCountBrackets&quot;:&quot;yes&quot;,&quot;showCountPosition&quot;:&quot;inline&quot;,&quot;dataTotalNumberOfOptions&quot;:&quot;30&quot;,&quot;inputOptionsOrder&quot;:&quot;yes&quot;,&quot;inputOptionsOrderDir&quot;:&quot;yes&quot;,&quot;taxonomyHierarchical&quot;:&quot;no&quot;,&quot;limitTaxonomyDepth&quot;:&quot;no&quot;,&quot;taxonomyDepth&quot;:&quot;1&quot;,&quot;taxonomyFilterArchive&quot;:&quot;no&quot;,&quot;taxonomyOrderBy&quot;:&quot;name&quot;,&quot;taxonomyOrderDir&quot;:&quot;asc&quot;,&quot;taxonomyTermsConditions&quot;:&quot;all&quot;,&quot;taxonomyTerms&quot;:[],&quot;addClass&quot;:&quot;&quot;,&quot;stylesId&quot;:1,&quot;width&quot;:&quot;&quot;,&quot;inputShowIcon&quot;:&quot;yes&quot;,&quot;align&quot;:&quot;&quot;,&quot;alignment&quot;:&quot;&quot;,&quot;autoSubmit&quot;:&quot;yes&quot;,&quot;autoSubmitDelay&quot;:&quot;0&quot;,&quot;hideFieldWhenEmpty&quot;:&quot;no&quot;,&quot;defaultValueInheritArchive&quot;:&quot;yes&quot;,&quot;defaultValueInheritPost&quot;:&quot;no&quot;,&quot;defaultValueApplyToQuery&quot;:&quot;no&quot;,&quot;labelToggleVisibility&quot;:&quot;no&quot;,&quot;labelInitialVisibility&quot;:&quot;no&quot;,&quot;dataPostAuthorConditions&quot;:&quot;all&quot;,&quot;dataPostAuthors&quot;:[],&quot;dataPostAuthorRoles&quot;:[],&quot;dataPostAuthorCapabilities&quot;:[],&quot;dataAcfGroup&quot;:&quot;&quot;,&quot;dataAcfField&quot;:&quot;&quot;,&quot;dataUrlName&quot;:&quot;&quot;,&quot;dataType&quot;:&quot;taxonomy&quot;,&quot;defaultValueType&quot;:&quot;none&quot;,&quot;dataTaxonomy&quot;:&quot;category&quot;,&quot;descriptionColor&quot;:&quot;#ffffff&quot;},&quot;options&quot;:[{&quot;value&quot;:&quot;accessibility-and-inclusion&quot;,&quot;label&quot;:&quot;Accessibility and Inclusion&quot;,&quot;depth&quot;:0,&quot;id&quot;:69,&quot;parent_id&quot;:0,&quot;count&quot;:6,&quot;countLabel&quot;:&quot;(6)&quot;},{&quot;value&quot;:&quot;art-and-design&quot;,&quot;label&quot;:&quot;Art and Design&quot;,&quot;depth&quot;:0,&quot;id&quot;:18,&quot;parent_id&quot;:0,&quot;count&quot;:10,&quot;countLabel&quot;:&quot;(10)&quot;},{&quot;value&quot;:&quot;business-and-entrepreneurship&quot;,&quot;label&quot;:&quot;Business and Entrepreneurship&quot;,&quot;depth&quot;:0,&quot;id&quot;:12,&quot;parent_id&quot;:0,&quot;count&quot;:8,&quot;countLabel&quot;:&quot;(8)&quot;},{&quot;value&quot;:&quot;community-engagement-and-awareness&quot;,&quot;label&quot;:&quot;Community Engagement and Awareness&quot;,&quot;depth&quot;:0,&quot;id&quot;:38,&quot;parent_id&quot;:0,&quot;count&quot;:11,&quot;countLabel&quot;:&quot;(11)&quot;},{&quot;value&quot;:&quot;connectivity-and-communication&quot;,&quot;label&quot;:&quot;Connectivity and Communication&quot;,&quot;depth&quot;:0,&quot;id&quot;:31,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;creative-and-experiential-storytelling&quot;,&quot;label&quot;:&quot;Creative and Experiential Storytelling&quot;,&quot;depth&quot;:0,&quot;id&quot;:43,&quot;parent_id&quot;:0,&quot;count&quot;:10,&quot;countLabel&quot;:&quot;(10)&quot;},{&quot;value&quot;:&quot;education-and-awareness&quot;,&quot;label&quot;:&quot;Education and Awareness&quot;,&quot;depth&quot;:0,&quot;id&quot;:33,&quot;parent_id&quot;:0,&quot;count&quot;:8,&quot;countLabel&quot;:&quot;(8)&quot;},{&quot;value&quot;:&quot;education-and-learning&quot;,&quot;label&quot;:&quot;Education and Learning&quot;,&quot;depth&quot;:0,&quot;id&quot;:10,&quot;parent_id&quot;:0,&quot;count&quot;:18,&quot;countLabel&quot;:&quot;(18)&quot;},{&quot;value&quot;:&quot;entertainment-and-media&quot;,&quot;label&quot;:&quot;Entertainment and Media&quot;,&quot;depth&quot;:0,&quot;id&quot;:11,&quot;parent_id&quot;:0,&quot;count&quot;:18,&quot;countLabel&quot;:&quot;(18)&quot;},{&quot;value&quot;:&quot;environmental-impact&quot;,&quot;label&quot;:&quot;Environmental Impact&quot;,&quot;depth&quot;:0,&quot;id&quot;:35,&quot;parent_id&quot;:0,&quot;count&quot;:7,&quot;countLabel&quot;:&quot;(7)&quot;},{&quot;value&quot;:&quot;environmental-sustainability&quot;,&quot;label&quot;:&quot;Environmental Sustainability&quot;,&quot;depth&quot;:0,&quot;id&quot;:29,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;fashion-and-beauty&quot;,&quot;label&quot;:&quot;Fashion and Beauty&quot;,&quot;depth&quot;:0,&quot;id&quot;:17,&quot;parent_id&quot;:0,&quot;count&quot;:6,&quot;countLabel&quot;:&quot;(6)&quot;},{&quot;value&quot;:&quot;food-and-beverage&quot;,&quot;label&quot;:&quot;Food and Beverage&quot;,&quot;depth&quot;:0,&quot;id&quot;:9,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;global-connection-and-empathy&quot;,&quot;label&quot;:&quot;Global Connection and Empathy&quot;,&quot;depth&quot;:0,&quot;id&quot;:34,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;health-and-wellness&quot;,&quot;label&quot;:&quot;Health and Wellness&quot;,&quot;depth&quot;:0,&quot;id&quot;:13,&quot;parent_id&quot;:0,&quot;count&quot;:17,&quot;countLabel&quot;:&quot;(17)&quot;},{&quot;value&quot;:&quot;history-and-culture&quot;,&quot;label&quot;:&quot;History and Culture&quot;,&quot;depth&quot;:0,&quot;id&quot;:32,&quot;parent_id&quot;:0,&quot;count&quot;:6,&quot;countLabel&quot;:&quot;(6)&quot;},{&quot;value&quot;:&quot;hobbies-and-leisure&quot;,&quot;label&quot;:&quot;Hobbies and Leisure&quot;,&quot;depth&quot;:0,&quot;id&quot;:15,&quot;parent_id&quot;:0,&quot;count&quot;:6,&quot;countLabel&quot;:&quot;(6)&quot;},{&quot;value&quot;:&quot;lifestyle-and-productivity&quot;,&quot;label&quot;:&quot;Lifestyle and Productivity&quot;,&quot;depth&quot;:0,&quot;id&quot;:16,&quot;parent_id&quot;:0,&quot;count&quot;:14,&quot;countLabel&quot;:&quot;(14)&quot;},{&quot;value&quot;:&quot;mental-health-and-emotional-resilience&quot;,&quot;label&quot;:&quot;Mental Health and Emotional Resilience&quot;,&quot;depth&quot;:0,&quot;id&quot;:41,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;mindfulness-and-decision-making&quot;,&quot;label&quot;:&quot;Mindfulness and Decision-Making&quot;,&quot;depth&quot;:0,&quot;id&quot;:24,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;mindfulness-and-well-being&quot;,&quot;label&quot;:&quot;Mindfulness and Well-Being&quot;,&quot;depth&quot;:0,&quot;id&quot;:39,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;performance-enhancement&quot;,&quot;label&quot;:&quot;Performance Enhancement&quot;,&quot;depth&quot;:0,&quot;id&quot;:40,&quot;parent_id&quot;:0,&quot;count&quot;:6,&quot;countLabel&quot;:&quot;(6)&quot;},{&quot;value&quot;:&quot;personal-growth-and-development&quot;,&quot;label&quot;:&quot;Personal Growth and Development&quot;,&quot;depth&quot;:0,&quot;id&quot;:22,&quot;parent_id&quot;:0,&quot;count&quot;:7,&quot;countLabel&quot;:&quot;(7)&quot;},{&quot;value&quot;:&quot;philosophy-and-psychology&quot;,&quot;label&quot;:&quot;Philosophy and Psychology&quot;,&quot;depth&quot;:0,&quot;id&quot;:27,&quot;parent_id&quot;:0,&quot;count&quot;:7,&quot;countLabel&quot;:&quot;(7)&quot;},{&quot;value&quot;:&quot;relationships-and-connection&quot;,&quot;label&quot;:&quot;Relationships and Connection&quot;,&quot;depth&quot;:0,&quot;id&quot;:21,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;safety-and-security&quot;,&quot;label&quot;:&quot;Safety and Security&quot;,&quot;depth&quot;:0,&quot;id&quot;:30,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;science-and-research&quot;,&quot;label&quot;:&quot;Science and Research&quot;,&quot;depth&quot;:0,&quot;id&quot;:19,&quot;parent_id&quot;:0,&quot;count&quot;:5,&quot;countLabel&quot;:&quot;(5)&quot;},{&quot;value&quot;:&quot;self-improvement-and-personal-growth&quot;,&quot;label&quot;:&quot;Self-Improvement and Personal Growth&quot;,&quot;depth&quot;:0,&quot;id&quot;:23,&quot;parent_id&quot;:0,&quot;count&quot;:9,&quot;countLabel&quot;:&quot;(9)&quot;},{&quot;value&quot;:&quot;social-impact-and-community&quot;,&quot;label&quot;:&quot;Social Impact and Community&quot;,&quot;depth&quot;:0,&quot;id&quot;:8,&quot;parent_id&quot;:0,&quot;count&quot;:20,&quot;countLabel&quot;:&quot;(20)&quot;},{&quot;value&quot;:&quot;spirituality-and-mindfulness&quot;,&quot;label&quot;:&quot;Spirituality and Mindfulness&quot;,&quot;depth&quot;:0,&quot;id&quot;:20,&quot;parent_id&quot;:0,&quot;count&quot;:13,&quot;countLabel&quot;:&quot;(13)&quot;}],&quot;values&quot;:[],&quot;uid&quot;:1,&quot;urlName&quot;:&quot;category&quot;,&quot;icons&quot;:[&quot;arrow-down&quot;,&quot;clear&quot;],&quot;urlTemplate&quot;:[],&quot;id&quot;:1,&quot;connectedData&quot;:{&quot;taxonomyParents&quot;:[],&quot;termIdentifiers&quot;:[{&quot;id&quot;:69,&quot;slug&quot;:&quot;accessibility-and-inclusion&quot;},{&quot;id&quot;:18,&quot;slug&quot;:&quot;art-and-design&quot;},{&quot;id&quot;:12,&quot;slug&quot;:&quot;business-and-entrepreneurship&quot;},{&quot;id&quot;:38,&quot;slug&quot;:&quot;community-engagement-and-awareness&quot;},{&quot;id&quot;:31,&quot;slug&quot;:&quot;connectivity-and-communication&quot;},{&quot;id&quot;:43,&quot;slug&quot;:&quot;creative-and-experiential-storytelling&quot;},{&quot;id&quot;:33,&quot;slug&quot;:&quot;education-and-awareness&quot;},{&quot;id&quot;:10,&quot;slug&quot;:&quot;education-and-learning&quot;},{&quot;id&quot;:11,&quot;slug&quot;:&quot;entertainment-and-media&quot;},{&quot;id&quot;:35,&quot;slug&quot;:&quot;environmental-impact&quot;},{&quot;id&quot;:29,&quot;slug&quot;:&quot;environmental-sustainability&quot;},{&quot;id&quot;:17,&quot;slug&quot;:&quot;fashion-and-beauty&quot;},{&quot;id&quot;:9,&quot;slug&quot;:&quot;food-and-beverage&quot;},{&quot;id&quot;:34,&quot;slug&quot;:&quot;global-connection-and-empathy&quot;},{&quot;id&quot;:13,&quot;slug&quot;:&quot;health-and-wellness&quot;},{&quot;id&quot;:32,&quot;slug&quot;:&quot;history-and-culture&quot;},{&quot;id&quot;:15,&quot;slug&quot;:&quot;hobbies-and-leisure&quot;},{&quot;id&quot;:16,&quot;slug&quot;:&quot;lifestyle-and-productivity&quot;},{&quot;id&quot;:41,&quot;slug&quot;:&quot;mental-health-and-emotional-resilience&quot;},{&quot;id&quot;:24,&quot;slug&quot;:&quot;mindfulness-and-decision-making&quot;},{&quot;id&quot;:39,&quot;slug&quot;:&quot;mindfulness-and-well-being&quot;},{&quot;id&quot;:40,&quot;slug&quot;:&quot;performance-enhancement&quot;},{&quot;id&quot;:22,&quot;slug&quot;:&quot;personal-growth-and-development&quot;},{&quot;id&quot;:27,&quot;slug&quot;:&quot;philosophy-and-psychology&quot;},{&quot;id&quot;:21,&quot;slug&quot;:&quot;relationships-and-connection&quot;},{&quot;id&quot;:30,&quot;slug&quot;:&quot;safety-and-security&quot;},{&quot;id&quot;:19,&quot;slug&quot;:&quot;science-and-research&quot;},{&quot;id&quot;:23,&quot;slug&quot;:&quot;self-improvement-and-personal-growth&quot;},{&quot;id&quot;:8,&quot;slug&quot;:&quot;social-impact-and-community&quot;},{&quot;id&quot;:20,&quot;slug&quot;:&quot;spirituality-and-mindfulness&quot;},{&quot;id&quot;:5,&quot;slug&quot;:&quot;sustainability-and-environment&quot;},{&quot;id&quot;:37,&quot;slug&quot;:&quot;sustainability-and-innovation&quot;},{&quot;id&quot;:6,&quot;slug&quot;:&quot;technology-and-innovation&quot;},{&quot;id&quot;:14,&quot;slug&quot;:&quot;travel-and-adventure&quot;},{&quot;id&quot;:1,&quot;slug&quot;:&quot;uncategorized&quot;},{&quot;id&quot;:7,&quot;slug&quot;:&quot;urban-planning-and-design&quot;},{&quot;id&quot;:26,&quot;slug&quot;:&quot;visual-storytelling&quot;},{&quot;id&quot;:44,&quot;slug&quot;:&quot;wellness-and-mindfulness&quot;},{&quot;id&quot;:68,&quot;slug&quot;:&quot;wild-and-experimental&quot;}],&quot;optionsLabels&quot;:{&quot;accessibility-and-inclusion&quot;:&quot;Accessibility and Inclusion&quot;,&quot;art-and-design&quot;:&quot;Art and Design&quot;,&quot;business-and-entrepreneurship&quot;:&quot;Business and Entrepreneurship&quot;,&quot;community-engagement-and-awareness&quot;:&quot;Community Engagement and Awareness&quot;,&quot;connectivity-and-communication&quot;:&quot;Connectivity and Communication&quot;,&quot;creative-and-experiential-storytelling&quot;:&quot;Creative and Experiential Storytelling&quot;,&quot;education-and-awareness&quot;:&quot;Education and Awareness&quot;,&quot;education-and-learning&quot;:&quot;Education and Learning&quot;,&quot;entertainment-and-media&quot;:&quot;Entertainment and Media&quot;,&quot;environmental-impact&quot;:&quot;Environmental Impact&quot;,&quot;environmental-sustainability&quot;:&quot;Environmental Sustainability&quot;,&quot;fashion-and-beauty&quot;:&quot;Fashion and Beauty&quot;,&quot;food-and-beverage&quot;:&quot;Food and Beverage&quot;,&quot;global-connection-and-empathy&quot;:&quot;Global Connection and Empathy&quot;,&quot;health-and-wellness&quot;:&quot;Health and Wellness&quot;,&quot;history-and-culture&quot;:&quot;History and Culture&quot;,&quot;hobbies-and-leisure&quot;:&quot;Hobbies and Leisure&quot;,&quot;lifestyle-and-productivity&quot;:&quot;Lifestyle and Productivity&quot;,&quot;mental-health-and-emotional-resilience&quot;:&quot;Mental Health and Emotional Resilience&quot;,&quot;mindfulness-and-decision-making&quot;:&quot;Mindfulness and Decision-Making&quot;,&quot;mindfulness-and-well-being&quot;:&quot;Mindfulness and Well-Being&quot;,&quot;performance-enhancement&quot;:&quot;Performance Enhancement&quot;,&quot;personal-growth-and-development&quot;:&quot;Personal Growth and Development&quot;,&quot;philosophy-and-psychology&quot;:&quot;Philosophy and Psychology&quot;,&quot;relationships-and-connection&quot;:&quot;Relationships and Connection&quot;,&quot;safety-and-security&quot;:&quot;Safety and Security&quot;,&quot;science-and-research&quot;:&quot;Science and Research&quot;,&quot;self-improvement-and-personal-growth&quot;:&quot;Self-Improvement and Personal Growth&quot;,&quot;social-impact-and-community&quot;:&quot;Social Impact and Community&quot;,&quot;spirituality-and-mindfulness&quot;:&quot;Spirituality and Mindfulness&quot;,&quot;sustainability-and-environment&quot;:&quot;Sustainability and Environment&quot;,&quot;sustainability-and-innovation&quot;:&quot;Sustainability and Innovation&quot;,&quot;technology-and-innovation&quot;:&quot;Technology and Innovation&quot;,&quot;travel-and-adventure&quot;:&quot;Travel and Adventure&quot;,&quot;uncategorized&quot;:&quot;Uncategorized&quot;,&quot;urban-planning-and-design&quot;:&quot;Urban Planning and Design&quot;,&quot;visual-storytelling&quot;:&quot;Visual Storytelling&quot;,&quot;wellness-and-mindfulness&quot;:&quot;Wellness and Mindfulness&quot;,&quot;wild-and-experimental&quot;:&quot;Wild and Experimental&quot;}},&quot;supports&quot;:[],&quot;elementorId&quot;:&quot;fe5bbf5&quot;}"><div id="search-filter-label-0" class="search-filter-label">Categories</div><div aria-labelledby="search-filter-label-0" class="search-filter-component-combobox-base search-filter-component-combobox search-filter-field__input search-filter-component-combobox--mode-single search-filter-component-combobox--search-disabled"><div class="search-filter-component-combobox__header"><div class="search-filter-component-combobox__actions search-filter-component-combobox__actions--empty"><div class="search-filter-component-combobox__selection search-filter-component-combobox__selection-placeholder" role="combobox" tabindex="0" aria-expanded="false" aria-controls="search-filter-input-combobox-listbox-0" aria-haspopup="listbox" maxlength="2048" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="true" aria-autocomplete="list" aria-live="polite"><span>Categories</span></div></div><div class="search-filter-component-combobox__clear-selection search-filter-component-combobox--hidden"><div role="button" aria-label="Clear selection" class="search-filter-icon search-filter-icon--interactive search-filter-icon--destructive" tabindex="0"><svg class="search-filter-icon__svg"><use href="#sf-svg-clear"></use></svg></div></div><div class="search-filter-component-combobox__listbox-toggle"><div class="search-filter-icon"><svg class="search-filter-icon__svg"><use href="#sf-svg-arrow-down"></use></svg></div></div></div></div><div aria-live="polite" role="status" class="search-filter-component-combobox-base__screen-reader-text">31 results available.</div>



                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-28daef3 elementor-widget elementor-widget-search-filter-field" data-id="28daef3" data-element_type="widget" data-settings="{&quot;search_filter_field&quot;:&quot;field_2&quot;}" data-widget_type="search-filter-field.default">
                  <div class="elementor-widget-container">
                    <div class="search-filter-base search-filter-field search-filter-field--id-2 search-filter-field--type-control search-filter-field--control-type-sort search-filter-style--id-1 search-filter-style--control-sort" data-search-filter-settings="{&quot;attributes&quot;:{&quot;queryId&quot;:&quot;1&quot;,&quot;type&quot;:&quot;control&quot;,&quot;label&quot;:&quot;Sort &amp; Explore&quot;,&quot;showLabel&quot;:&quot;yes&quot;,&quot;showDescription&quot;:&quot;no&quot;,&quot;description&quot;:&quot;&quot;,&quot;placeholder&quot;:&quot;Sort &amp; Explore the Garden&quot;,&quot;sortOptions&quot;:[{&quot;label&quot;:&quot;Seeds A-Z&quot;,&quot;orderBy&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;metaKey&quot;:&quot;&quot;,&quot;metaType&quot;:&quot;string&quot;,&quot;includePostsWithoutMeta&quot;:false,&quot;uid&quot;:1},{&quot;label&quot;:&quot;Newest Seeds&quot;,&quot;orderBy&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;metaKey&quot;:&quot;&quot;,&quot;metaType&quot;:&quot;string&quot;,&quot;includePostsWithoutMeta&quot;:false,&quot;uid&quot;:3},{&quot;label&quot;:&quot;Trending Now&quot;,&quot;orderBy&quot;:&quot;comment_count&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;metaKey&quot;:&quot;&quot;,&quot;metaType&quot;:&quot;string&quot;,&quot;includePostsWithoutMeta&quot;:false,&quot;uid&quot;:2}],&quot;addClass&quot;:&quot;&quot;,&quot;stylesId&quot;:1,&quot;width&quot;:&quot;&quot;,&quot;inputShowIcon&quot;:&quot;yes&quot;,&quot;align&quot;:&quot;&quot;,&quot;alignment&quot;:&quot;&quot;,&quot;autoSubmit&quot;:&quot;yes&quot;,&quot;autoSubmitDelay&quot;:&quot;&quot;,&quot;hideFieldWhenEmpty&quot;:&quot;no&quot;,&quot;labelToggleVisibility&quot;:&quot;no&quot;,&quot;labelInitialVisibility&quot;:&quot;no&quot;,&quot;dataUrlName&quot;:&quot;&quot;,&quot;dataType&quot;:&quot;post_attribute&quot;,&quot;dataTotalNumberOfOptions&quot;:&quot;30&quot;,&quot;inputOptionsOrderDir&quot;:&quot;asc&quot;,&quot;dataPostAttribute&quot;:&quot;post_type&quot;,&quot;dataPostTypes&quot;:[],&quot;defaultValueType&quot;:&quot;none&quot;,&quot;inputType&quot;:&quot;submit&quot;,&quot;controlType&quot;:&quot;sort&quot;},&quot;options&quot;:[],&quot;values&quot;:[],&quot;uid&quot;:10,&quot;urlName&quot;:&quot;sort&quot;,&quot;icons&quot;:[&quot;arrow-down&quot;,&quot;clear&quot;],&quot;urlTemplate&quot;:[],&quot;id&quot;:2,&quot;connectedData&quot;:[],&quot;supports&quot;:[],&quot;elementorId&quot;:&quot;28daef3&quot;}"><div id="search-filter-label-1" class="search-filter-label">Sort &amp; Explore</div><div aria-labelledby="search-filter-label-1" class="search-filter-component-combobox-base search-filter-component-combobox search-filter-field__input search-filter-component-combobox--mode-single search-filter-component-combobox--search-disabled"><div class="search-filter-component-combobox__header"><div class="search-filter-component-combobox__actions search-filter-component-combobox__actions--empty"><div class="search-filter-component-combobox__selection search-filter-component-combobox__selection-placeholder" role="combobox" tabindex="0" aria-expanded="false" aria-controls="search-filter-input-combobox-listbox-1" aria-haspopup="listbox" maxlength="2048" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="true" aria-autocomplete="list" aria-live="polite"><span>Sort &amp; Explore the Garden</span></div></div><div class="search-filter-component-combobox__clear-selection search-filter-component-combobox--hidden"><div role="button" aria-label="Clear selection" class="search-filter-icon search-filter-icon--interactive search-filter-icon--destructive" tabindex="0"><svg class="search-filter-icon__svg"><use href="#sf-svg-clear"></use></svg></div></div><div class="search-filter-component-combobox__listbox-toggle"><div class="search-filter-icon"><svg class="search-filter-icon__svg"><use href="#sf-svg-arrow-down"></use></svg></div></div></div></div><div aria-live="polite" role="status" class="search-filter-component-combobox-base__screen-reader-text">2 results available.</div>



                    </div>
                  </div>
                </div>
                <div class="elementor-element elementor-element-7d7310e elementor-widget elementor-widget-search-filter-field" data-id="7d7310e" data-element_type="widget" data-settings="{&quot;search_filter_field&quot;:&quot;field_3&quot;}" data-widget_type="search-filter-field.default">
                  <div class="elementor-widget-container">
                    <div class="search-filter-base search-filter-field search-filter-field--id-3 search-filter-field--type-search search-filter-field--input-type-autocomplete search-filter-style--id-1 search-filter-style--search-autocomplete" data-search-filter-settings="{&quot;attributes&quot;:{&quot;queryId&quot;:&quot;1&quot;,&quot;type&quot;:&quot;search&quot;,&quot;label&quot;:&quot;Search&quot;,&quot;showLabel&quot;:&quot;yes&quot;,&quot;showDescription&quot;:&quot;no&quot;,&quot;description&quot;:&quot;&quot;,&quot;inputType&quot;:&quot;autocomplete&quot;,&quot;placeholder&quot;:&quot;Search&quot;,&quot;inputOptionsAddDefault&quot;:&quot;no&quot;,&quot;inputOptionsDefaultLabel&quot;:&quot;All items&quot;,&quot;inputOptionsOrder&quot;:&quot;yes&quot;,&quot;inputOptionsOrderDir&quot;:&quot;asc&quot;,&quot;taxonomyOrderBy&quot;:&quot;yes&quot;,&quot;taxonomyOrderDir&quot;:&quot;yes&quot;,&quot;taxonomyTermsConditions&quot;:&quot;all&quot;,&quot;taxonomyTerms&quot;:[],&quot;addClass&quot;:&quot;&quot;,&quot;stylesId&quot;:1,&quot;width&quot;:&quot;&quot;,&quot;inputShowIcon&quot;:&quot;yes&quot;,&quot;align&quot;:&quot;&quot;,&quot;alignment&quot;:&quot;&quot;,&quot;autoSubmit&quot;:&quot;yes&quot;,&quot;autoSubmitDelay&quot;:&quot;1500&quot;,&quot;hideFieldWhenEmpty&quot;:&quot;no&quot;,&quot;defaultValueInheritArchive&quot;:&quot;yes&quot;,&quot;defaultValueInheritPost&quot;:&quot;no&quot;,&quot;defaultValueApplyToQuery&quot;:&quot;no&quot;,&quot;labelToggleVisibility&quot;:&quot;no&quot;,&quot;labelInitialVisibility&quot;:&quot;no&quot;,&quot;dataAcfGroup&quot;:&quot;&quot;,&quot;dataAcfField&quot;:&quot;&quot;,&quot;dataUrlName&quot;:&quot;&quot;,&quot;dataType&quot;:&quot;post_attribute&quot;,&quot;dataTotalNumberOfOptions&quot;:&quot;30&quot;,&quot;dataPostAttribute&quot;:&quot;default&quot;,&quot;defaultValueType&quot;:&quot;none&quot;,&quot;descriptionColor&quot;:&quot;#ffffff&quot;},&quot;options&quot;:[],&quot;values&quot;:[],&quot;uid&quot;:11,&quot;urlName&quot;:&quot;s&quot;,&quot;icons&quot;:[&quot;search&quot;,&quot;clear&quot;,&quot;spinner-circle&quot;],&quot;urlTemplate&quot;:[],&quot;id&quot;:3,&quot;connectedData&quot;:{&quot;autocompletApiUrl&quot;:&quot;http:\/\/staging3.thegardenofgreatideas.com\/wp-json\/search-filter-pro\/v1\/fields\/autocomplete\/suggestions&quot;},&quot;supports&quot;:[],&quot;elementorId&quot;:&quot;7d7310e&quot;}"><div id="search-filter-label-2" class="search-filter-label">Search</div><div class="search-filter-input-text search-filter-input-text search-filter-component-autocomplete-control search-filter-component-combobox-base search-filter-field__input"><div class="search-filter-icon search-filter-input-text__icon"><svg class="search-filter-icon__svg"><use href="#sf-svg-search"></use></svg></div><input type="text" id="search-filter-input-combobox-2" aria-labelledby="search-filter-label-2" autocomplete="off" placeholder="Search" maxlength="2048" autocorrect="off" autocapitalize="off" spellcheck="true" aria-autocomplete="list" aria-controls="search-filter-input-combobox-listbox-2" role="combobox" aria-haspopup="listbox" aria-expanded="false" class="search-filter-input-text__input"></div><div aria-live="polite" role="status" class="search-filter-component-combobox-base__screen-reader-text">No results.</div>



                    </div>
                  </div>
                </div>
              </div> --}}
              <div class="search-filter-query--id-1 elementor-element elementor-element-2a18587 elementor-grid-4 post-divider elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts search-filter-query" data-id="2a18587" data-element_type="widget" data-settings="{&quot;classic_columns&quot;:&quot;4&quot;,&quot;pagination_type&quot;:&quot;numbers_and_prev_next&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.classic">
                <div class="elementor-widget-container">
                  <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid elementor-has-item-ratio">
                    @foreach ($ideas as $idea )
                    @if ($idea->is_ai_refined)
                           <article class="elementor-post elementor-grid-item post-4048 post type-post status-publish format-standard has-post-thumbnail hentry category-accessibility-and-inclusion category-global-connection-and-empathy category-health-and-wellness category-lifestyle-and-productivity category-social-impact-and-community category-spirituality-and-mindfulness category-technology-and-innovation">
                      <a class="elementor-post__thumbnail__link" href="#" tabindex="-1">
                        <div class="elementor-post__thumbnail">
                          <img decoding="async" width="300" height="300"  src="{{ asset('storage/' . $idea->ai_cover_image) }}" class="attachment-medium size-medium wp-image-4050" alt="" sizes="(max-width: 300px) 100vw, 300px">
                        </div>
                      </a>
                      <div class="elementor-post__text">
                        <h3 class="elementor-post__title">
                          <a href="#">
                            {{ $idea->ai_idea_name }}
                            <span class="mdp-liker-meta"><span class="dashicons dashicons-heart"></span><span class="mdp-liker-meta--value">0</span>
                            </span>
                          </a>
                        </h3>
                        <div class="elementor-post__excerpt">
                          <p>
                            {{ $idea->ai_idea_sentence }}
                          </p>
                          <p>{{$idea->ai_full_story}}</p>
                        </div>
                        @php
                        $hasWatered = in_array($idea->id, $wateredIdeaIds ?? []);
                      @endphp
<div class="d-flex gap-3 flex-wrap">
    <a href=""
       class="btn btn-sm {{ $hasWatered ? 'btn-success disabled watered-button' : 'btn-primary water-button' }}"
       data-id="{{ $idea->id }}">
       {{ $hasWatered ? '✅ Watered' : 'Water the Seed' }}
    </a>
  <a href="#" class="btn btn-info btn-sm ai-analysis-btn" data-id="{{ $idea->id }}">AI Analysis</a>
  @if(auth()->id() !== $idea->user_id)
  <a href="{{ route('user.chatify', ['id' => $idea->user_id]) }}" class="btn btn-secondary btn-sm">Propose Collaboration</a>
  @endif
</div>


                      </div>
                    </article>

                    @else
                        @php
                        $hasWatered = in_array($idea->id, $wateredIdeaIds ?? []);
                      @endphp
                           <article class="elementor-post elementor-grid-item post-4048 post type-post status-publish format-standard has-post-thumbnail hentry category-accessibility-and-inclusion category-global-connection-and-empathy category-health-and-wellness category-lifestyle-and-productivity category-social-impact-and-community category-spirituality-and-mindfulness category-technology-and-innovation">
                      <a class="elementor-post__thumbnail__link" href="#" tabindex="-1">
                        <div class="elementor-post__thumbnail">
                            @php
                                $imagePath = $idea->cover_image ?: $idea->ai_cover_image;
                            @endphp
                          <img decoding="async" width="300" height="300"  src="{{ $imagePath ? asset('storage/' . $imagePath) : '' }}" class="attachment-medium size-medium wp-image-4050" alt="" sizes="(max-width: 300px) 100vw, 300px">
                        </div>
                      </a>
                      <div class="elementor-post__text">
                        <h3 class="elementor-post__title">
                          <a href="#">
                            {{ $idea->idea_name }}
                            <span class="mdp-liker-meta"><span class="dashicons dashicons-heart"></span><span class="mdp-liker-meta--value">0</span>
                            </span>
                          </a>
                        </h3>
                        <div class="elementor-post__excerpt">
                          <p>
                            {{ $idea->idea_sentence }}
                          </p>
                          <p>{{$idea->full_story}}</p>
                        </div>
<div class="d-flex gap-3 flex-wrap align-items-center">
      <a href=""
       class="btn btn-sm {{ $hasWatered ? 'btn-success disabled watered-button' : 'btn-primary water-button' }}"
       data-id="{{ $idea->id }}">
       {{ $hasWatered ? '✅ Watered' : 'Water the Seed' }}
    </a>
  <a href="#" class="btn btn-info btn-sm ai-analysis-btn" data-id="{{ $idea->id }}">AI Analysis</a>
    @if(auth()->id() !== $idea->user_id)
  <a href="{{ route('user.chatify', ['id' => $idea->user_id]) }}" class="btn btn-secondary btn-sm">Propose Collaboration</a>
  @endif
</div>
                      </div>
                           </article>
                    @endif
                    @endforeach
                  </div>

                  <div class="e-load-more-anchor" data-page="1" data-max-page="2" data-next-page="{{route('explore.gardens')}}2/"></div>
                  {{-- <nav class="elementor-pagination" aria-label="Pagination">
                    <span class="page-numbers prev">« Previous</span>
                    <span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Page</span>1</span>
                    <a class="page-numbers" href="{{route('explore.gardens')}}2/"><span class="elementor-screen-only">Page</span>2</a>
                    <a class="page-numbers next" href="{{route('explore.gardens')}}2/">Next »</a>
                  </nav> --}}
                </div>
              </div>
              <div class="search-filter-base search-filter-query__spinner search-filter-query--id-1" style="
                  width: 1280px;
                  height: 6597.53px;
                  top: calc(340px);
                  left: calc(313px);
                ">
                <div class="search-filter-query__spinner-icon">
                  <svg><use href="#sf-svg-spinner-circle"></use></svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="aiAnalysisModal" tabindex="-1" aria-labelledby="aiAnalysisLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-4 border-0">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title fw-bold" id="aiAnalysisLabel">🧠 AI Analysis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body px-4 py-3">
        <div id="aiAnalysisContent" class="text-dark">
          <!-- AI content will be injected here via JS -->
        </div>
      </div>

      <div class="modal-footer border-top-0 d-flex justify-content-end">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.ai-analysis-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const ideaId = this.dataset.id;

            // Show modal with loading text
            const modal = new bootstrap.Modal(document.getElementById('aiAnalysisModal'));
            document.getElementById('aiAnalysisContent').innerHTML = "<p class='text-muted'>Loading...</p>";
            modal.show();

            // Fetch analysis
fetch(`{{ route('ideas.getAiAnalysis', ':id') }}`.replace(':id', ideaId))
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // document.getElementById('aiAnalysisContent').innerHTML = `<pre style="white-space:pre-wrap">${data.analysis}</pre>`;
                        const formatted = formatAnalysis(data.analysis);
                        document.getElementById('aiAnalysisContent').innerHTML = formatted;

                    } else {
                        document.getElementById('aiAnalysisContent').innerHTML = `<p class="text-danger">${data.message}</p>`;
                    }
                })
                .catch(err => {
                    document.getElementById('aiAnalysisContent').innerHTML = `<p class="text-danger">Error fetching analysis.</p>`;
                });
        });
    });

    function formatAnalysis(text) {
    const sections = ['Strengths:', 'Suggestions for Improvement:', 'Creative Expansions:', 'Connections to Other Ideas:'];

    // Break into sections using regex
    const sectionRegex = new RegExp(`(${sections.join('|')})`, 'g');
    const parts = text.split(sectionRegex).filter(Boolean);

    let html = '';
    for (let i = 0; i < parts.length; i++) {
        const part = parts[i].trim();
        if (sections.includes(part)) {
            html += `<h5 class="mt-3 mb-2 fw-semibold text-primary">${part.replace(':', '')}</h5><ul class="mb-3">`;
        } else {
            const bullets = part.split('•').filter(b => b.trim() !== '');
            bullets.forEach(b => {
                html += `<li class="mb-1">${b.trim()}</li>`;
            });
            html += `</ul>`;
        }
    }
    return html;
}
});
</script>

<script>
 document.querySelectorAll('.water-button').forEach(button => {
    button.addEventListener('click', function () {
        const ideaId = this.getAttribute('data-id');
           fetch(`{{ route('ideas.watered', ':id') }}`.replace(':id', ideaId), {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({})
        })
        .then(res => res.json())
        .then(data => {
            if (data.message === 'Idea watered successfully') {
                this.classList.remove('btn-primary');
                this.classList.add('btn-success');
                this.innerText = '✅ Watered';
                this.disabled = true;
            } else if (data.message === 'Already watered this idea!') {
                this.classList.remove('btn-primary');
                this.classList.add('btn-success');
                this.innerText = '✅ Watered';
                this.disabled = true;
            }
        })
        .catch(err => {
            console.error(err);
        });
    });
});

</script>


@endpush
