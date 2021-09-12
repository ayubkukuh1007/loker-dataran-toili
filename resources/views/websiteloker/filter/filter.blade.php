<form class="job_filters">      
    <div class="search_jobs">
        <div class="keywords">
            <label for="search_keywords">Keywords</label>
            <input type="text" data-page="2" data-link="{{url('')}}/search-lowongan/job/page/" data-div="#listjob" name="search_keywords" id="search_keywords" placeholder="Isi Kerjaan yang dicari, lalu tekan enter" value="">
        </div>
        <div class="search_categories">
        <label for="search_categories">Category</label>
            <select class="form-control" name="search_graduate" id="search_graduate">
                <option value="" selected="" disabled="">Semua Lulusan</option>
                @foreach ($graduates as $graduated)
                    <option value="{{$graduated->id}}">{{$graduated->graduated}}</option>
                @endforeach
            </select>
        </div>
        <div class="search_region">
            <select class="form-control" name="search_region" id="search_region">
                <option value="" selected="" disabled="">Semua Lokasi</option>
                @foreach ($locations as $location)
                    <option value="{{$location->id}}">{{$location->location}}</option>
                @endforeach
            </select>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Cari Lowongan">
    </div>
    <ul class="job_types">
            @foreach ($jobtypes as $type)
            <li><input type="checkbox" name="filter_job_type[]" value="{{$type->id}}" checked="checked" id="{{$type->type}}"> {{$type->type}}</label></li>
            @endforeach
    </ul>
</form>