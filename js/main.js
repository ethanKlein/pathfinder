// IDEO + NGA Pathfinder

var pathfinder = {
  speed: 200, // for animations (sliding, fading, etc)
  setup: function() {
    pathfinder.sendEmail();
    pathfinder.emailForm();
    pathfinder.commentBox();
    pathfinder.scrollNav();
    pathfinder.perspectiveVote();
    pathfinder.commentVote();
    pathfinder.openCloseComments();
    pathfinder.newPerspective();
    pathfinder.submitNewPerspective();
    pathfinder.openTimelineItem();
    pathfinder.timelineReadMore();
    pathfinder.timelineExtend();
    pathfinder.contextToggle();
    pathfinder.timelineGraphToggle();
    pathfinder.hamburger();
    pathfinder.mobileNav();
    pathfinder.navScrollStyling();
    pathfinder.animateNumbers();
    FastClick.attach(document.body); // gets rid of 300ms mobile click delay
  },

  // animates numbers in spotlight row
  // uses https://github.com/inorganik/CountUp.js
  animateNumbers: function() {
    var spotlight1 = new CountUp("spotlight1", 26, 38, 0, 3);
    spotlight1.start();

    var spotlight2 = new CountUp("spotlight2", 400, 716, 0, 3);
    spotlight2.start();

    var spotlight4 = new CountUp("spotlight4", 4, 18, 0, 3);
    spotlight4.start();

    $('.map_container').addClass('animate');
  },

  // handles opening and closing the comments within each perspective (if there are any)
  openCloseComments: function() {
    $('#perspective').on('click', '.comment_count_container', function() {
      if ($(this).hasClass('closed')) {
        $(this).removeClass('closed').addClass('open');
        $(this).closest('.perspective_container')
               .find('.new_comment_container')
               .velocity('slideDown', {duration: pathfinder.speed});
      } else {
        $(this).removeClass('open').addClass('closed');
        $(this).closest('.perspective_container')
               .find('.new_comment_container')
               .velocity('slideUp', {duration: pathfinder.speed});
      }
    });
  },

  // change the nav style when at top or scrolled down
  navScrollStyling: function() {
    $body = $('body'); // save jquery evaluation cycles
    $(document).on('scroll', function() {
      var distFromTop = $body.scrollTop();
      if (distFromTop < 10) { // if we're at the top
        $('.topic_box').removeClass('not_top');
        $('.pathfinder_nav').removeClass('not_top');
      } else {
        $('.topic_box').addClass('not_top');
        $('.pathfinder_nav').addClass('not_top');
      }
    });
  },

  // mobile nav functionality
  mobileNav: function() {
    $('.mobile_nav a').click(function() {
      $('#hamburger').trigger('click');
    });
  },

  // opens and closes the mobile nav
  hamburger: function() {
    $('#hamburger').click(function() {
      var $mobileNav = $('.mobile_nav');
      $(this).toggleClass('open');

      if ($mobileNav.hasClass('closed')) {
        $mobileNav.velocity("fadeIn", { duration: pathfinder.speed })
        $mobileNav.removeClass('closed').addClass('open');
      } else {
        $mobileNav.velocity("fadeOut", { duration: pathfinder.speed })
        $mobileNav.removeClass('open').addClass('closed');
      }
  	});
  },

  // switches between the timeline and the graph
  timelineGraphToggle: function() {
    $('.timeline_graph_toggle .timeline').click(function() {
      $(this).removeClass('inactive').addClass('active');
      $('.timeline_graph_toggle .graph').removeClass('active').addClass('inactive');
      $('.timeline_container').show();
      $('.graph_container').hide();
    });
    $('.timeline_graph_toggle .graph').click(function() {
      $(this).removeClass('inactive').addClass('active');
      $('.timeline_graph_toggle .timeline').removeClass('active').addClass('inactive');
      $('.graph_container').show();
      $('.timeline_container').hide();
    });
  },

  // opens or closes the Context additional content
  contextToggle: function() {
    $('.context_toggle').click(function() {
      if ($(this).hasClass('closed')) {
        $(this).find('.show_more_text').velocity("fadeOut", { duration: pathfinder.speed });
        $(this).find('.show_less_text').velocity("fadeIn", { duration: pathfinder.speed });
        $('.context_additional').velocity('slideDown', {duration: pathfinder.speed});
        $(this).removeClass('closed').addClass('open');
      } else {
        $(this).find('.show_less_text').velocity("fadeOut", { duration: pathfinder.speed });
        $(this).find('.show_more_text').velocity("fadeIn", { duration: pathfinder.speed });
        $('.context_additional').velocity('slideUp', {duration: pathfinder.speed});
        $(this).removeClass('open').addClass('closed');
      }
    });
  },


  // timeline items have 3 states, collapsed, highlighted and open
  openTimelineItem: function() {
    // when a timeline is clicked
    $('#activity').on('click', '.timeline_item.collapsed', function() {
      // if it's collapsed, open it.
      if ($(this).hasClass('closed')) {
        $(this).find('.full_content').velocity("slideDown", { duration: pathfinder.speed });
        $(this).find('.collapsed_content').fadeOut(pathfinder.speed);
        $(this).removeClass('closed').addClass('open');
      } else {
        $(this).find('.full_content').velocity("slideUp", { duration: pathfinder.speed });
        $(this).find('.collapsed_content').fadeIn(pathfinder.speed);
        $(this).removeClass('open').addClass('closed');
      }
    });
  },

  // toggles timeline read more / read less
  // TODO: this logic could be combined with openTimelineItem... probably should be.
  timelineReadMore: function() {
    $('.timeline_container').on('click', '.timeline_item.highlighted.expandable', function() {
      var $timelineItem = $(this);
      if ($(this).hasClass('closed')) {
        $(this).removeClass('closed').addClass('open');
        $(this).find('.read_more_text').velocity("fadeOut", { duration: pathfinder.speed });
        $(this).find('.read_less_text').velocity("fadeIn", { duration: pathfinder.speed });
        $timelineItem.find('.read_more_content')
                     .velocity('slideDown', {duration: pathfinder.speed})
      } else {
        $(this).removeClass('open').addClass('closed');
        $(this).find('.read_less_text').velocity("fadeOut", { duration: pathfinder.speed });
        $(this).find('.read_more_text').velocity("fadeIn", { duration: pathfinder.speed });
        $timelineItem.find('.read_more_content')
                     .velocity('slideUp', {duration: pathfinder.speed})
      }
    });
  },

  // extends the bottom of the timeline if user clicks on bottom arrow of vertical timeline bar.
  timelineExtend: function() {
    $('.timeline_bottom_text').click(function() {
      if ($('.timeline_bar').hasClass('closed')) {
        $('.timeline_bar').removeClass('closed').addClass('open');
        $('.hidden_timeline_items').velocity('slideDown', {duration: pathfinder.speed});
      } else {
        $('.timeline_bar').removeClass('open').addClass('closed');
        $('.hidden_timeline_items').velocity('slideUp', {duration: pathfinder.speed});
      }
    });
  },

  // handles submission of new perspectives
  // Uses perspective_template which can be found at the bottom of index.html
  submitNewPerspective: function() {
    $('.persp_submit').click(function() {
      var title = $('.new_persp_form_title').val();
      var description = $('.new_persp_form_description').val();
      // if title and description are not empty
      if (title !== '' && description !== '') {
        var $newPerspContainer = $('.perspective_template').clone();
        $newPerspContainer.removeClass('perspective_template');
        $newPerspContainer.find('.perspective_title').text(title);
        $newPerspContainer.find('.perspective_body').text(description);
        pathfinder.determineNewPerspLocation($newPerspContainer);
        $newPerspContainer.fadeIn(pathfinder.speed);
        $('.add_new_perspective_button').trigger('click'); // close perspective form

        // clear the form
        $('.new_persp_form_title').val('');
        $('.new_persp_form_description').val('');
      }
    });
  },

  // figures out in which column to add new perspective (possible add new row, etc.)
  determineNewPerspLocation: function($newPerspContainer) {
    var $lastRow = $('.persp_box_row').last();
    var perspectivesInLastRow = $lastRow.find('.perspective_container').length;
    if (perspectivesInLastRow === 1) {
      $lastRow.find('.col-sm-4').eq(1).append($newPerspContainer);
    } else if (perspectivesInLastRow === 2) {
      $lastRow.find('.col-sm-4').eq(2).append($newPerspContainer);
    } else if (perspectivesInLastRow === 3) {
      // create new row
      var $newRow = $('.perp_box_row_template').clone();
      $newRow.removeClass('perp_box_row_template').addClass('persp_box_row');
      $newRow.find('.col-sm-4').eq(0).append($newPerspContainer);
      $('.persp_box_rows_container').append($newRow);
    }

  },

  // opens (slides-down) the new perspective form
  newPerspective: function() {
    $('.add_new_perspective_button').click(function() {
      $('.new_persp_form_container').slideToggle(pathfinder.speed);
    });
  },

  // Handles up and down votes for perspectives
  perspectiveVote: function() {
    $('#perspective').on('click', '.perspective_vote .up', function() {
      var $voteNum = $(this).closest('.perspective_vote').find('.number');
      var currentNum = $voteNum.text();
      var newNum = parseInt(currentNum, 10)+1;
      $voteNum.text(newNum);
    });

    $('#perspective').on('click', '.perspective_vote .down', function() {
      var $voteNum = $(this).closest('.perspective_vote').find('.number');
      var currentNum = $voteNum.text();
      var newNum = parseInt(currentNum, 10)-1;
      $voteNum.text(newNum);
    });
  },

  // Handles up and down voting for comments
  commentVote: function() {
    // comment up vote
    $('.new_comment_container').on('click', '.comment_vote .up', function() {
      var $voteNum = $(this).closest('.comment_vote').find('.number');
      var currentNum = $voteNum.text();
      var newNum = parseInt(currentNum, 10)+1;
      $voteNum.text(newNum);
    });

    // comment down vote
    $('.new_comment_container').on('click', '.comment_vote .down', function() {
      var $voteNum = $(this).closest('.comment_vote').find('.number');
      var currentNum = $voteNum.text();
      var newNum = parseInt(currentNum, 10)-1;
      $voteNum.text(newNum);
    });
  },

  // Scrolls site to correct section when nav item clicked
  scrollNav: function() {
    $(".pathfinder_nav ul li a[href^='#']").on('click', function(e) {
       // prevent default anchor click behavior
       e.preventDefault();
       // store hash
       var hash = this.hash;

       var adjustment = 0;
       // adjust for different sections
       if (hash === '#context') {
         adjustment = -100;
       }

       // animate
       $('html, body').animate({
           scrollTop: $(hash).offset().top + adjustment
         }, 300, function(){
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = hash;
       });
    });
  },

  // Handles clicking on comment box and comment submissions
  commentBox: function() {
    $('#perspective').on('click', '.comment_box_container', function(e) {
      if (e.target.className === 'post_comment_button') {
        return;
      }
      $(this).addClass('open');
      $(this).find('.comment_input').focus();
      $(this).next('.post_comment_button').show();
    });

    $('#perspective').on('click', '.post_comment_button', function() {
      var $perspectiveContainer = $(this).closest('.perspective_container');
      var $commentContainer = $(this).prev('.comment_box_container');
      var commentText = $commentContainer.find('.comment_input').val();
      // differentiate between comments for current perspective and those of others
      var $newCommentContainer = $perspectiveContainer.find('.new_comment_container');
      // post comment if it's not empty
      if (commentText !== '') {
        var $newCommentTemplate = $('.new_comment_template').clone();
        $newCommentTemplate.removeClass('new_comment_template').addClass('new_comment');
        $newCommentTemplate.find('.new_comment_text').text(commentText);
        $newCommentTemplate.appendTo($newCommentContainer);
        $newCommentContainer.show();
        pathfinder.resetCommentBox($commentContainer);
        pathfinder.increaseCommentNumber($perspectiveContainer);
      }
    });
  },

  // Increases comment number when comment is submitted
  increaseCommentNumber: function($perspectiveContainer) {
    var $currNumOfComments = $perspectiveContainer.find('.number_of_comments');
    $perspectiveContainer.find('.comment_count_container').removeClass('closed').addClass('open');
    console.log($perspectiveContainer.find('.comment_count_container'));
    var newNum = parseInt($currNumOfComments.text(), 10)+1;
    $currNumOfComments.text(newNum);
  },

  resetCommentBox: function($commentContainer) {
    // erase comment from text box
    $commentContainer.find('.comment_input').val('');
    $commentContainer.find('.post_comment_button').hide();
  },

  emailForm: function() {
    // opens the email digest signup form
    $('.follow_button_container').click(function(e) {
      var $form = $(this).find('.digest_signup_form');
      if ($form.hasClass('closed')) {
        $form.velocity('slideDown', {duration: pathfinder.speed});
        $form.removeClass('closed').addClass('open');
      } else {
        return;
      }
    });

    // close the form if it's open and user re-clicks button
    $('.more_details_button').click(function() {
      var $form = $(this).closest('.follow_button_container').find('.digest_signup_form');
      if ($form.hasClass('open')) {
        pathfinder.closeEmailForm();
      }
    });

    // email digest form gets submitted
    $('.follow_button_container').on('click', '.follow_story_submit', function() {
      $form = $(this).closest('.digest_signup_form');
      var emailAddr = $form.find('.digest_email_field').val();
      if (emailAddr !== '') {
        // send the email if email address is not empty
        // TODO: better email address validation
        pathfinder.sendEmail(emailAddr);
        pathfinder.closeEmailForm();
        // change text of Follow This Story button
        $('.more_details_button').text('Following this story!');
      }
    });
  },

  closeEmailForm: function() {
    var $form = $('.digest_signup_form');
    $form.velocity('slideUp', {duration: pathfinder.speed});
    // TODO: fix this setTimeout hack which enables toggling of the email form.
    setTimeout(function() {$form.removeClass('open').addClass('closed');}, 500);
  },

  sendEmail: function(emailAddr) {
    $.ajax({
      type: 'POST',
      url: 'https://mandrillapp.com/api/1.0/messages/send.json',
      data: {
        'key': 'C_cNJkZv1H3p30LFg8DwXw',
        'message': {
          'from_email': 'ethan@ethanklein.org',
          'to': [{
              'email': emailAddr, // get email from form
              'name': 'NGA Pathfinder Subscriber', // get name from form
              'type': 'to'
            }
          ],
          'autotext': 'true',
          'subject': 'NGA Pathfinder Digest',
          'html': "<img src='http://www.ethanklein.org/ideo/nga/img/email.jpg' alt='NGA Digest Email' />", // example of how to use the merge tags
          'track_opens': true,
          'track_clicks': true,
        }
      }
    }).done(function(response) {
      // console.log(response); // if you're into that sorta thing
    });
  }

}

$(function() {
  pathfinder.setup();
});
