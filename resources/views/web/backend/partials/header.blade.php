
<div class="dashboard-header--right">
    <!-- notification icon -->
    <div class="dashboard-notification--icon">
      <i class="fa-regular fa-bell fa-lg"></i>
    </div>
    <!-- tokens  -->
    <div class="dashboard-user--tokens">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
        <path
          d="M19.7256 12C19.7256 12.2652 19.6202 12.5196 19.4327 12.7071C19.2452 12.8946 18.9908 13 18.7256 13C18.4604 13 18.206 12.8946 18.0185 12.7071C17.8309 12.5196 17.7256 12.2652 17.7256 12C17.7256 11.7348 17.8309 11.4804 18.0185 11.2929C18.206 11.1054 18.4604 11 18.7256 11C18.9908 11 19.2452 11.1054 19.4327 11.2929C19.6202 11.4804 19.7256 11.7348 19.7256 12Z"
          fill="white" />
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M10.6696 3.25H13.7816C15.6196 3.25 17.0756 3.25 18.2146 3.403C19.3866 3.561 20.3356 3.893 21.0846 4.641C22.0086 5.566 22.3036 6.804 22.4106 8.411C22.9876 8.664 23.4236 9.201 23.4706 9.881C23.4756 9.942 23.4756 10.007 23.4756 10.067V13.933C23.4756 13.993 23.4756 14.058 23.4716 14.118C23.4236 14.798 22.9876 15.336 22.4106 15.59C22.3036 17.196 22.0086 18.434 21.0846 19.359C20.3356 20.107 19.3866 20.439 18.2146 20.597C17.0746 20.75 15.6196 20.75 13.7816 20.75H10.6696C8.83159 20.75 7.37559 20.75 6.23659 20.597C5.06459 20.439 4.11559 20.107 3.36659 19.359C2.61859 18.61 2.28659 17.661 2.12859 16.489C1.97559 15.349 1.97559 13.894 1.97559 12.056V11.944C1.97559 10.106 1.97559 8.65 2.12859 7.511C2.28659 6.339 2.61859 5.39 3.36659 4.641C4.11559 3.893 5.06459 3.561 6.23659 3.403C7.37659 3.25 8.83159 3.25 10.6696 3.25ZM20.8936 15.75H18.9556C16.8106 15.75 14.9746 14.122 14.9746 12C14.9746 9.878 16.8106 8.25 18.9546 8.25H20.8926C20.7786 6.909 20.5216 6.2 20.0226 5.702C19.5996 5.279 19.0196 5.025 18.0136 4.89C16.9866 4.752 15.6316 4.75 13.7246 4.75H10.7246C8.81759 4.75 7.46359 4.752 6.43459 4.89C5.42959 5.025 4.84959 5.279 4.42659 5.702C4.00359 6.125 3.75059 6.705 3.61559 7.71C3.47759 8.738 3.47559 10.092 3.47559 11.999C3.47559 13.906 3.47759 15.261 3.61559 16.289C3.75059 17.294 4.00459 17.874 4.42759 18.297C4.85059 18.72 5.43059 18.974 6.43659 19.109C7.46459 19.247 8.81859 19.249 10.7256 19.249H13.7256C15.6326 19.249 16.9876 19.247 18.0156 19.109C19.0206 18.974 19.6006 18.72 20.0236 18.297C20.5226 17.799 20.7796 17.091 20.8936 15.749M5.97559 8C5.97559 7.80109 6.0546 7.61032 6.19526 7.46967C6.33591 7.32902 6.52667 7.25 6.72559 7.25H10.7256C10.9245 7.25 11.1153 7.32902 11.2559 7.46967C11.3966 7.61032 11.4756 7.80109 11.4756 8C11.4756 8.19891 11.3966 8.38968 11.2559 8.53033C11.1153 8.67098 10.9245 8.75 10.7256 8.75H6.72559C6.52667 8.75 6.33591 8.67098 6.19526 8.53033C6.0546 8.38968 5.97559 8.19891 5.97559 8ZM21.6496 9.75H18.9556C17.5316 9.75 16.4746 10.809 16.4746 12C16.4746 13.191 17.5316 14.25 18.9546 14.25H21.6726C21.8786 14.237 21.9676 14.098 21.9746 14.014V9.986C21.9676 9.902 21.8786 9.763 21.6726 9.751L21.6496 9.75Z"
          fill="white" />
      </svg>
      <span>746 Tokens</span>
    </div>
    <!-- profile -->
    <div class="dashboard-user--profile-dropdown">
      <div class="dashboard-user--profile--image">
        <img src="../assets/images/artist-profile-img.png" alt="" />
      </div>

      <div class="dashboard-profile--username">
        <div class="dashboard-profile--name--icon">
          <span> {{auth()->user()->name}} </span>
          <i class="fa-solid fa-angle-down fa-sm"></i>
        </div>
        <p class="dashboard-profile--user--role">{{auth()->user()->role}}</p>
      </div>
    </div>
  </div>