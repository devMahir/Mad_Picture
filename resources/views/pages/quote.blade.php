<div class="container d-flex justify-content-center flex-column px-md-5 px-1">
    <div class="h3 text-center font-weight-bold">GET FREE QUOTE</div>
    <br><br>
    @include('layouts.partials.backend.msg')
    <form action="{{ route('quote.store') }}" method="POST">
        @csrf
        <div class="row my-4">
            <div class="col-md-6"> 
                <label>Full Name</label> 
                <input name="name" type="text" required="required">
            </div>
            <div class="col-md-6 pt-md-0 pt-4"> 
                <label>Job Title</label>
                <input name="jobTitle" type="text" required="required">
            </div>
        </div>
        <div class="row my-md-4 my-2">
            <div class="col-md-6">
                <label>E-Mail</label>
                <input name="email" type="email" >
            </div>
            <div class="col-md-6 pt-md-0 pt-4">
                <label>Phone</label> 
                <input name="phone" type="tel" required="required"> 
            </div>
        </div>
        <div class="row my-md-4 my-2">
            <div class="col-md-6"> 
                <label>Company</label> 
                <input name="companyName" type="text" required="required"> 
            </div>
            <div class="col-md-6 pt-md-0 pt-4"> 
                <label>Division</label> 
                <select name="devision" id="country">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Mymenshingh">Mymenshingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Josshor">Josshor</option>
                    <option value="Khulna">Khulna</option>
                </select>
            </div>
        </div>

        <label class="mt-md-0 mt-2">Budget Range</label>

        <div class="d-lg-flex justify-content-between align-items-center pb-4">
            <div class="size"> 
                <label class="option"> 
                    <input type="radio" name="budgetRange" value="< 250">&lt; 250<span class="checkmark"></span>
                </label> 
            </div>
            <div class="size"> 
                <label class="option"> 
                    <input type="radio" name="budgetRange" value="251 - 1000">251 - 1000 <span class="checkmark"></span>
                </label> 
            </div>
            <div class="size"> 
                <label class="option"> 
                    <input type="radio" name="budgetRange" value="1001 - 5000">1001 - 5000 <span class="checkmark"></span>
                </label> 
            </div>
            <div class="size"> 
                <label class="option"> 
                    <input type="radio" name="budgetRange" value="5001 - 10,000">5001 - 10,000 <span class="checkmark"></span>
                </label> 
            </div>
            <div class="size"> 
                <label class="option"> 
                    <input type="radio" name="budgetRange" value="> 10,000">&gt; 10,000 <span class="checkmark"></span>
                </label> 
            </div>
        </div>
        <div class="d-flex justify-content-end"> 
            <button type="submit" class="btn">Request Quote</button> 
        </div>
    </form>
</div>