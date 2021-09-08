<form class="job_filters">      
    <div class="search_jobs">
        <div class="keywords">
            <label for="search_keywords">Keywords</label>
            <input type="text" name="search_keywords" id="search_keywords" placeholder="Kata Kunci" value="">
        </div>
        <div class="search_categories">
            <label for="search_categories">Category</label>
            <select name="search_categories[]" id="search_categories" class="job-manager-category-dropdown select2-hidden-accessible" data-placeholder="Lulusan…" data-no_results_text="No results match" data-multiple_text="Select Some Options" data-select2-id="search_categories" tabindex="-1" aria-hidden="true">
                <option value="" data-select2-id="4">Semua Lulusan</option>	<option class="level-0" value="35">D1</option>
                <option class="level-0" value="11">D3</option>
                <option class="level-0" value="12">S1</option>
                <option class="level-0" value="27">S2</option>
                <option class="level-0" value="15">SMA</option>
                <option class="level-0" value="33">SMP</option>
                <option class="level-0" value="22">UMUM</option>
            </select>
            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;">
                <span class="selection">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-search_categories-container">
                        <span class="select2-selection__rendered" id="select2-search_categories-container" role="textbox" aria-readonly="true"></span>
                            <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                            </span>
                        </span>
                    </span>
            <span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="search_region">
                <select name="search_region" id="search_region" class="search_region select2-hidden-accessible" data-select2-id="search_region" tabindex="-1" aria-hidden="true">
                    <option value="0" selected="selected" data-select2-id="2">Lokasi</option>
                    <option class="level-0" value="18">Bantul</option>
                    <option class="level-0" value="32">Nasional</option>
                    <option class="level-0" value="17">Sleman</option>
                    <option class="level-0" value="16">Yogyakarta</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 1050px;">
                <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-search_region-container">
                        <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                        </span>
                    </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true">
                </span>
                </span>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="Cari Lowongan">
                </div>
                <ul class="job_types">
                    <li><label for="job_type_ads" class="ads"><input type="checkbox" name="filter_job_type[]" value="ads" checked="checked" id="job_type_ads"> Ads</label></li>
                    <li><label for="job_type_favorit" class="favorite"><input type="checkbox" name="filter_job_type[]" value="favorit" checked="checked" id="job_type_favorit"> Favorite</label></li>
                    <li><label for="job_type_freelance" class="freelance"><input type="checkbox" name="filter_job_type[]" value="freelance" checked="checked" id="job_type_freelance"> Freelance</label></li>
                    <li><label for="job_type_full-time" class="full-time"><input type="checkbox" name="filter_job_type[]" value="full-time" checked="checked" id="job_type_full-time"> Full Time</label></li>
                    <li><label for="job_type_magang" class="magang"><input type="checkbox" name="filter_job_type[]" value="magang" checked="checked" id="job_type_magang"> Magang</label></li>
                    <li><label for="job_type_part-time" class="part-time"><input type="checkbox" name="filter_job_type[]" value="part-time" checked="checked" id="job_type_part-time"> Part Time</label></li>
                </ul>
                <input type="hidden" name="filter_job_type[]" value="">
            <div class="showing_jobs" style="display: none;"></div>
    </form>