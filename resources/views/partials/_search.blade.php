<form method="GET" class="form-outline flex-grow-1 mx-2 d-flex container">
    <select name="searchFor" class="rounded-4 mr-2" aria-label="Default select example">
        <option value="to">Search for:</option>
        <option {{request()->searchFor == 'to' ? 'selected' : null}} value="to">To</option>
        <option {{request()->searchFor == 'company' ? 'selected' : null}} value="company">Company</option>
      </select>
    <input type="search" name="search" placeholder="Search for a flight" class="form-control rounded-4" value="{{request()->search}}" />
    <button type="submit" class="btn p-0 px-2" data-mdb-ripple-init>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg>
    </button>
</form>
