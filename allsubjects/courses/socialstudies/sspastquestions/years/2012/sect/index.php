<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <link rel="shortcut icon" href="../../../../../../images/favicon.ico">
    <title>Quiz | B.E.C.E 2012 v2.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/grid/">

    

    <!-- Bootstrap core CSS -->
<link href="../../../../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
  </head>
  <body class="py-4">
    
<main>
  <!--<div class="container">

    <h1>Bootstrap grid examples</h1>
    <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
    <p>In these examples the <code>.themed-grid-col</code> class is added to the columns to add some theming. This is not a class that is available in Bootstrap by default.</p>

    <h2 class="mt-4">Five grid tiers</h2>
    <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

    <div class="row mb-3">
      <div class="col-4 themed-grid-col">.col-4</div>
      <div class="col-4 themed-grid-col">.col-4</div>
      <div class="col-4 themed-grid-col">.col-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
      <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
      <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
      <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
    </div>

    <div class="row mb-3">
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
      <div class="col-xxl-4 themed-grid-col">.col-xxl-4</div>
    </div>

    <h2 class="mt-4">Three equal columns</h2>
    <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
    <div class="row mb-3">
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Three equal columns alternative</h2>
    <p>By using the <code>.row-cols-*</code> classes, you can easily create a grid with equal columns.</p>
    <div class="row row-cols-md-3 mb-3">
      <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
      <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
      <div class="col themed-grid-col"><code>.col</code> child of <code>.row-cols-md-3</code></div>
    </div>

    <h2 class="mt-4">Three unequal columns</h2>
    <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
    <div class="row mb-3">
      <div class="col-md-3 themed-grid-col">.col-md-3</div>
      <div class="col-md-6 themed-grid-col">.col-md-6</div>
      <div class="col-md-3 themed-grid-col">.col-md-3</div>
    </div>

    <h2 class="mt-4">Two columns</h2>
    <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">.col-md-8</div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Full width, single column</h2>
    <p class="text-warning">
      No grid classes are necessary for full-width elements.
    </p>

    <hr class="my-4">

    <h2 class="mt-4">Two columns with two nested columns</h2>
    <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
    <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">
        <div class="pb-3">
          .col-md-8
        </div>
        <div class="row">
          <div class="col-md-6 themed-grid-col">.col-md-6</div>
          <div class="col-md-6 themed-grid-col">.col-md-6</div>
        </div>
      </div>
      <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile and desktop</h2>
    <p>The Bootstrap v4 grid system has five tiers of classes: xs (extra small, this class infix is not used), sm (small), md (medium), lg (large), and xl (extra large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
    <p>Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg and xl, you only need to specify md.</p>
    <div class="row mb-3">
      <div class="col-md-8 themed-grid-col">.col-md-8</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
      <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 themed-grid-col">.col-6</div>
      <div class="col-6 themed-grid-col">.col-6</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile, tablet, and desktop</h2>
    <div class="row mb-3">
      <div class="col-sm-6 col-lg-8 themed-grid-col">.col-sm-6 .col-lg-8</div>
      <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
    </div>
    <div class="row mb-3">
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Gutters</h2>
    <p>With <code>.gx-*</code> classes, the horizontal gutters can be adjusted.</p>
    <div class="row row-cols-1 row-cols-md-3 gx-4">
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gx-4</code> gutters</div>
    </div>
    <p class="mt-4">Use the <code>.gy-*</code> classes to control the vertical gutters.</p>
    <div class="row row-cols-1 row-cols-md-3 gy-4">
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.gy-4</code> gutters</div>
    </div>
    <p class="mt-4">With <code>.g-*</code> classes, the gutters in both directions can be adjusted.</p>
    <div class="row row-cols-1 row-cols-md-3 g-3">
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
      <div class="col themed-grid-col"><code>.col</code> with <code>.g-3</code> gutters</div>
    </div>
  </div>
-->
  <div class="container" id="containers">

    <center><h2 class="mt-4">2012 BECE Home Economics Past Questions – Paper Two</h2></center>
    
    <p>1. (a) Ama ate fried fish, kenkey and fresh pepper sauce

Copy and complete in a table what Ama ate into the functional groups of food.

Food item

Functional group

(i)     Fried fish

 

(ii)    Kenkey

 

(iii)   Fresh pepper sauce

 

(b) The diagram below is the drawing of a mango

2012-paper2-mango
(i) Enlarge the diagram in (b) in the drawing sheet provided below.

2012-drawing-grid
(ii) Shade your drawing in (b) (i) in three tones
(iii) List two other methods of shading apart from the one used in (b) (ii)

(c) (i) State two reasons why investigations are carried out in the design process.
(ii) List three electrical appliances used in the home
</p>
  </div><br /><br />

  <div class="container themed-container"><div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Answer 
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                1. (a) State one advantage of baked foods.<br />
(i) Baked foods look attractive <br />
(ii) Baked foods are appetizing<br />
(iii) They last longer as compared to boiled foods<br />
(iv) They do not need much attention when cooking<br />
(v) Shape of the food is maintained.<br /><br />

(b) State two disadvantages of freehand cutting. <br />
(i) It is not easy for beginners because they cannot cut accurately and precisely<br />
(ii) Mistakes made cannot be easily corrected<br />
(iii) It can result in waste of fabric<br />
(iv) It is difficult to estimate or determine the exact quantity of fabric needed<br />
(v) It is sometimes difficult to match motifs and lines<br />
(vi) It leads to change in style
(vii) It requires special skill

(c) (i) List two stages of the design process.
 Problem identification / Situation
 Brief
 Analysis
 Investigation
 Specification
 Making
 Possible solution
 Final solution
 Development of chosen solution
 Working drawing
 Testing
 Evaluation

(ii) List two methods of recording information for solving a design problem.
 Note-taking
 Tape recording
 Taking pictures / photographs
 Making sketches / drawing
 Graphs
 Modelling
 Video recording
 Charts

(iii) Name a suitable pencil for sketching a possible solution in a design work.
 HB pencil
 H pencil
 2B pencil

(iv) List two methods of sketching a final solution in pictorial drawing
 Oblique
 Isometric
 Perspective

(d) (i) Define a poster
A written or printed message on a fairly large sheet of paper used to announce events and advertise goods and services
OR
It is a notice or advertisement that informs the public

(ii) Give two reasons why poster is important in advertisement.
 It provides information to the public
 It educates the public
 It announces important events to the public
 It promotes sales / patronage.

(iii) List two types of poster
 Pictorial
 Fully text / non-pictorial / texture poster / unwritten poster

(iv) State one major difference between the two types of poster
Pictorial combines drawing or photographs with text, while fully text has no illustration at all

 

DISCLAIMER: ANSWERS PROVIDED ARE ONLY GUIDELINES TO BE EXPANDED, IF REQUIRED, INTO ESSAY FORM FOR FULL MARKS IN THE EXAMINATION.
              </div>
            </div>
          </div>
        </div></div><br /><br />
        <div class="container" id="containers">
2. (a) List six essential tools needed in the sewing box of a JHS student.

(b) State four points to consider when choosing a sewing machine.

(c) State the function of each of the following parts of the sewing machine

(i) Spool pin
(ii) Thread guide
(iii) Take up lever
(iv) Stop motion screw

(d) List three ways of caring for the sewing machine

        </div><br /><br />
  <div class="container themed-container">
    <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingFour">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                Answer 
              </button>
            </h4>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                a) Approved mining and Unauthorised mining<br /><br /><br />

                b) (i) The groups of people engaged in mining are foreigners and Ghanaians<br /><br />

                (ii)Government gives licences to miners for development of natural resource.<br /><br /><br />

                c) The people are left with little or no drinking water and they contract various diseases while the lands become desolate mounds on which nothing can grow.<br /><br /><br />

                d) (i) The writer is concerned / worried /disturbed / unhappy / upset / bothered / troubled /vexed/ sad / discontented, etc about the mining.<br /><br />

                (ii) The writer thinks nothing can be done about the effects of mining because the damage caused by mining is irreversible.<br /><br /><br />

                e) (i)exploit the country’s natural resources;
                      drain the country of its natural resources (or any suitable answer)<br /><br />

                (ii) making the land lose its value (or any suitable answer)<br /><br /><br />

                f) For each of the following words, give another word or a phrase that means the same, and can fit into the passage:<br />
                (i) vast; – very large / very wide /enormous / great<br /><br />
                (ii) sole – only / one and only / lone<br /><br />
                (iii) reclaim – restore / recover / salvage / regain<br /><br />
                (iv) mounds – heaps / piles / hills / knolls<br /><br />
                (v) glittering – shining, sparkling, gleaming / shimmering
                </div>
            </div>
          </div>
        </div>
              </div><br />
  
<div class="container" id="containers">    
    <p>3. (a) Why is a school canteen important? Give three reasons.

(b) State two important reasons for keeping the finger nails short and clean when cooking?

(c) In three sentences explain why Ama always keeps the kitchen clean.

(d) Define frying

(e) Give six examples of food that can be fried

(f) State one use of each of the following kitchen equipment
(i) Palette knife
(ii) perforated spoon
(iii) wooden spoon
(iv) strainer

</p>
  </div><br /><br />

  <div class="container themed-container"><div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Answer 
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                BELOW ARE SOME GUIDELINES THAT IF EMPLOYED AND REMEMBERED SHOULD AID THE STUDENT CONSTRUCT A GOOD ESSAY.<br />
                • TOPIC SENTENCE : Main Concept Of The Paragraph<br /><br />

                • THESIS STATEMENT: Clear And Coherent Statement That Answers The Question Posed.<br /><br />

                • SUPPORTING EVIDENCE: Evidence That Supports The Concept In The Thesis Statement.<br /><br />

                • PAPER FORMAT AND GRAMMAR: The Essay Should Have A Beginning Middle And An End. It Should Also Utilize Proper Grammar Including Punctuation, Spelling Subject And Verb Usage.
              </div>
            </div>
          </div>
        </div></div><br /><br />
              
    <div class="container" id="containers">
    <p>4. (a) What is a fibre?

(b) List the two main classes of textile fibres

(c) Give two examples of each of the two classes of textile fibres you have listed in (b)

(d) State two reasons why cotton fabrics are commonly used in Ghana.

(e) What is menu?

(f) Write down three types of menu

(g) Explain each of the three types of menu you have written in (f)

(h) Plan a two course meal for yourself.</p>
  </div><br /><br />

  <div class="container themed-container"><div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Answer 
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                BELOW ARE SOME GUIDELINES THAT IF EMPLOYED AND REMEMBERED SHOULD AID THE STUDENT CONSTRUCT A GOOD ESSAY.<br />
                • TOPIC SENTENCE : Main Concept Of The Paragraph<br /><br />

                • THESIS STATEMENT: Clear And Coherent Statement That Answers The Question Posed.<br /><br />

                • SUPPORTING EVIDENCE: Evidence That Supports The Concept In The Thesis Statement.<br /><br />

                • PAPER FORMAT AND GRAMMAR: The Essay Should Have A Beginning Middle And An End. It Should Also Utilize Proper Grammar Including Punctuation, Spelling Subject And Verb Usage.
              </div>
            </div>
          </div>
        </div></div><br /><br />

  <div class="container-xxl themed-container"><center>Good Luck</center></div>
</main>


    
  </body>
  <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
