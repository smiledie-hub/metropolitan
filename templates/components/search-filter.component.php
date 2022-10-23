<div class="search-filter">
    <div class="search-filter__container container">
        <form action="/" method="POST" class="search-filter__form">

            <div class="search-filter__row">
                <label>
                    <select class="select" name="purchase_type">
                        <option value="Buy">Buy</option>
                        <option value="Rent">Rent</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="completion_status">
                        <option selected value="Completion status" disabled>Completion status</option>
                        <option value="Ready">Ready</option>
                        <option value="In progress">In progress</option>
                    </select>
                </label>

                <label class="search-field">
                    <span class="icon-search search-field__icon"></span>
                    <input type="search" name="search" placeholder="Location, Community, City..." class="search-field__input">
                </label>

                <button type="submit" class="btn btn--primary">Find</button>
            </div>

            <div class="search-filter__row">
                <label>
                    <select class="select" name="select_property_type">
                        <option selected value="Select Property Type" disabled>Select Property Type</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="Villa">Villa</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="min_area">
                        <option selected value="Min. Area" disabled>Min. Area</option>
                        <option value="1 000">1 000</option>
                        <option value="2 000">2 000</option>
                        <option value="3 000">3 000</option>
                        <option value="4 000">4 000</option>
                        <option value="5 000">5 000</option>
                        <option value="6 000">6 000</option>
                        <option value="7 000">7 000</option>
                        <option value="8 000">8 000</option>
                        <option value="9 000">9 000</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="max_area">
                        <option selected value="Max. Area" disabled>Max. Area</option>
                        <option value="2 000">2 000</option>
                        <option value="3 000">3 000</option>
                        <option value="4 000">4 000</option>
                        <option value="5 000">5 000</option>
                        <option value="6 000">6 000</option>
                        <option value="7 000">7 000</option>
                        <option value="8 000">8 000</option>
                        <option value="9 000">9 000</option>
                        <option value="10 000">10 000</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="min_price">
                        <option selected value="Min. Price">Min. Price</option>
                        <option value="10,000,000 AED">10,000,000 AED</option>
                        <option value="10,500,000 AED">10,500,000 AED</option>
                        <option value="20,000,000 AED">20,000,000 AED</option>
                        <option value="20,500,000 AED">20,500,000 AED</option>
                        <option value="30,000,000 AED">30,000,000 AED</option>
                        <option value="30,500,000 AED">30,500,000 AED</option>
                        <option value="40,000,000 AED">40,000,000 AED</option>
                        <option value="40,500,000 AED">40,500,000 AED</option>
                        <option value="50,000,000 AED">50,000,000 AED</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="max_price">
                        <option selected value="Max. Price">Max. Price</option>
                        <option value="20,000,000 AED">20,000,000 AED</option>
                        <option value="20,500,000 AED">20,500,000 AED</option>
                        <option value="30,000,000 AED">30,000,000 AED</option>
                        <option value="30,500,000 AED">30,500,000 AED</option>
                        <option value="40,000,000 AED">40,000,000 AED</option>
                        <option value="40,500,000 AED">40,500,000 AED</option>
                        <option value="50,000,000 AED">50,000,000 AED</option>
                        <option value="50,500,000 AED">50,500,000 AED</option>
                        <option value="60,000,000 AED">60,000,000 AED</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="bedrooms">
                        <option selected value="Bedrooms">Bedrooms</option>
                        <option value="Any">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </label>

                <label>
                    <select class="select" name="lifestyle">
                        <option selected value="Lifestyle">Lifestyle</option>
                        <option value="Any">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </label>
            </div>

        </form>
    </div>
</div>