<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('List of Programs'), ['controller'=>'programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List of Schools'), ['controller'=>'schools', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="programs index large-9 medium-8 columns content">
    <h2><?= __('GradHunt Web Services Documentation') ?></h2>
    <p>You can use the links on the left to browse the school and graduate degree program information contained in the database.  In most cases, you can add a .json to the URL to retrieve the results in JSON format.</p>
    <p>The data provided by this site is derived from the <a href="https://nces.ed.gov/ipeds/datacenter/DataFiles.aspx">IPEDS Database</a> maintained by the U.S. Department of Education's National Center for Education Statistics.  This site was developed as part of a class project, <strong>and is intended for prototype usage only.</strong> No warranty is made to the accuracy or availability of the data on this site.  </p>
    
    <h3>API Documentation</h3>
    
    <h4>Graduate Programs</h4>
    <ul>
      <li><a href="/programs.json">/programs.json</a> provides a list of all programs in the database (all three levels).  Note, this request is paginated to provide only 20 results at a time.</li>
      <li><a href="/programs/majors.json">/programs/majors.json</a> provides a complete list of the lowest-level (most detailed) programs, i.e. those with a full 7 character CIP code.</li>
    </ul>
    
    <h4>School Information</h4>
    <p>Provides information on the schools included in the database.  See below for an explanation of the included variables.</p>
    <ul>
      <li><a href="/schools.json">/schools.json</a> provides a paginated list of schools.</li>
      <li><a href="/schools/view/186380.json">/schools/view/186380.json</a> provides details for the specified school ID.  Note, the output also includes a full listing of program offerings.</li>
    </ul>
    
    <h4>School Recommendations</h4>
    <p>Provides (crude) school recommendations based on several inputs.</p>
    <p>Example JSON request: <a href="/schools/recommend/1234.json?degree=masters&region=&score=650">/schools/recommend/1234.json?degree=masters&amp;region=&amp;score=650</a></p>
    <ul>
      <li>The number following <em>/schools/recommend/</em> is the program id, which you can obtain from the programs API above.  Don't forget to include .json if you want a JSON response.</li>
      <li><strong>region</strong> (optional) should be specified as one of the "OBEREG" codes listed above.</li>
      <li><strong>degree</strong> (optional) can be specified as "masters" or "phd".  If omitted, schools with either will be returned.</li>
      <li><strong>size</strong> (optional) will filter on the INSTSIZE field.</li>
      <li><strong>score</strong> (optional) will return only those schools with SATMT75 below the specified score.</li>
    </ul>
    <p>The JSON response will only include 3 schools.  However, if you leave off the .json in the URL, you can see a more complete list in HTML which is useful for testing your queries. See the following <a href="/schools/recommend/1234?degree=phd&region=2&score=750">example</a>.</p>

    <hr>

    <h5><strong>School Variable Descriptions</strong></h5>
    <ul>
      <li>OBEREG - Geographic region
        <ul>
          <li>0 - US Service schools</li>
          <li>1 - New England CT ME MA NH RI VT</li>
          <li>2 - Mid East DE DC MD NJ NY PA</li>
          <li>3 - Great Lakes IL IN MI OH WI</li>
          <li>4 - Plains IA KS MN MO NE ND SD</li>
          <li>5 - Southeast AL AR FL GA KY LA MS NC SC TN VA WV</li>
          <li>6 - Southwest AZ NM OK TX</li>
          <li>7 - Rocky Mountains CO ID MT UT WY</li>
          <li>8 - Far West AK CA HI NV OR WA</li>
          <li>9 - Outlying areas AS FM GU MH MP PR PW VI</li>
          <li>-3 - Not available"</li>
        </ul>
      </li>
      <li>HLOFFER - Highest level of offering</li>
      <li>LOCALE - Degree of urbanization (Urban-centric locale)
        <ul>
          <li>11 = City: Large: Territory inside an urbanized area and inside a principal city with population of 250,000 or more. </li>
          <li>12 = City: Midsize: Territory inside an urbanized area and inside a principal city with population less than 250,000 and greater than or equal to 100,000.</li>
          <li>13 = City: Small: Territory inside an urbanized area and inside a principal city with population less than 100,000.</li>
          <li>21 = Suburb: Large: Territory outside a principal city and inside an urbanized area with population of 250,000 or more.</li>
          <li>22 = Suburb: Midsize: Territory outside a principal city and inside an urbanized area with population less than 250,000 and greater than or equal to 100,000.</li>
          <li>23 = Suburb: Small: Territory outside a principal city and inside an urbanized area with population less than 100,000.</li>
          <li>31 = Town: Fringe: Territory inside an urban cluster that is less than or equal to 10 miles from an urbanized area.</li>
          <li>32 = Town: Distant: Territory inside an urban cluster that is more than 10 miles and less than or equal to 35 miles from an urbanized area.</li>
          <li>33 = Town: Remote: Territory inside an urban cluster that is more than 35 miles of an urbanized area.</li>
          <li>41 - Rural: Fringe: Census-defined rural territory that is less than or equal to 5 miles from an urbanized area, as well as rural territory that is less than or equal to 2.5 miles from an urban cluster. </li>
          <li>42 = Rural: Distant: Census-defined rural territory that is more than 5 miles but less than or equal to 25 miles from an urbanized area, as well as rural territory that is more than 2.5 miles but less than or equal to 10 miles from an urban cluster. </li>
          <li>43 = Rural: Remote: Census-defined rural territory that is more than 25 miles from an urbanized area and is also more than 10 miles from an urban cluster.</li>
        </ul>
      </li>
      <li>INSTCAT - Institutional category</li>
      <li>INSTSIZE - Institution size category</li>
      <li>APPLFEEG - Graduate application fee</li>
      <li>TUITION6 - In-state average tuition full-time graduates</li>
      <li>TUITION7 - Out-of-state average tuition full-time graduates</li>
      <li>APPLCN - Applicants total (undergrads only)</li>
      <li>ADMSSN - Admissions total (undergrads only)</li>
      <li>ENRLT - Enrolled total (undergrads only)</li>
      <li>SATMT25 - SAT Math 25th percentile score</li>
      <li>SATMT75 - SAT Math 75th percentile score</li>
      <li>SATWR25 - SAT Math 25th percentile score</li>
      <li>SATWR75 - SAT Math 75th percentile score</li>
    </ul>

    <p>&copy; 2016 by Sage Lichtenwalner</p>
</div>


