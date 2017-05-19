			/* Date Picker */
			var dateToday = new Date();
			var dateTodayPlusNumOfMonthAdvBook = new Date(new Date(dateToday).setMonth(dateToday.getMonth()+24));

			var check_in_date_val = $('#check_in_date').val();
				var d = new Date(check_in_date_val),
				check_in_month = '' + (d.getMonth()),
				check_in_day = '' + d.getDate(),
				check_in_year = d.getFullYear();

				
				
			$('#check_in_date').datepicker({
				autoclose: true,
				format: 'M dd, yyyy',
				startDate: '+0d',
				/*
				templates:{
					leftArrow: '<i class="fa fa-long-arrow-left"></i>',
					rightArrow: '<i class="fa fa-long-arrow-right"></i>'
				},
				*/
				endDate: dateTodayPlusNumOfMonthAdvBook,
				/*
				startDate: '+0d',
				setDate: '+0d',
				defaultViewDate: { year: check_in_year, month: check_in_month, day: check_in_day }
				*/
			}).on('changeDate',function(event){
				//console.log(event);
				//var val = event.format(0,"M dd, yyyy");
				var minDate = new Date(event.date.valueOf());
				
				var current_check_out_val = $('#check_out_date').val() == "" ? minDate : $('#check_out_date').val();
				var current_check_out_val = new Date(current_check_out_val);
				
				var newCheckOutDate = new Date(minDate.getTime() + 24 * 60 * 60 * 1000);
				
				$('#check_out_date').datepicker('setStartDate', newCheckOutDate);
				console.log(current_check_out_val+"<="+minDate);
				if(current_check_out_val <= minDate){
					$('#check_out_date').datepicker("update",newCheckOutDate);
				}else{
					$('#check_out_date').datepicker("update",current_check_out_val);
				}
				
				var arr_date = $('#check_in_date').val();
				var ad = new Date(arr_date);
				
				var dep_date = $('#check_out_date').val();
				var dd = new Date(dep_date);
				
				var timeDiff = Math.abs(ad.getTime() - dd.getTime());
				var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
				$('#number_of_nights').val(diffDays);
				
				
			});

			var check_out_date_val = $('#check_out_date').val();
			var d = new Date(check_out_date_val),
			check_out_month = '' + (d.getMonth()),
			check_out_day = '' + d.getDate(),
			check_out_year = d.getFullYear();

			$('#check_out_date').datepicker({
				autoclose: true,
				format: 'M dd, yyyy',
				startDate: '+0d',
				/*
				templates:{
					leftArrow: '<i class="fa fa-long-arrow-left"></i>',
					rightArrow: '<i class="fa fa-long-arrow-right"></i>'
				},
				*/
				endDate: dateTodayPlusNumOfMonthAdvBook,
				/*
				startDate: '+'+(1 + 1)+'d',
				setDate: '+1d',
				defaultViewDate: { year: check_out_year, month: check_out_month, day: check_out_day }
				*/
			}).on('changeDate', function (event) {

				var arr_date = $('#check_in_date').val();
				var ad = new Date(arr_date);
				
				var dep_date = $('#check_out_date').val();
				var dd = new Date(dep_date);
				
				var timeDiff = Math.abs(ad.getTime() - dd.getTime());
				var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
				$('#number_of_nights').val(diffDays);
				
			});

			$(".check_in_date_icon").click(function(){ 
				$('#check_in_date').focus();
			});
			$(".check_out_date_icon").click(function(){ 
				$('#check_out_date').focus();
			});
			$(".arrival_icon").click(function(){ 
				$('#arrival').focus();
			});
			$(".departure_icon").click(function(){ 
				$('#departure').focus();
			});
			
			$('#date-of-birth').datepicker({
				autoclose: true,
				format: 'M dd, yyyy'
				/*
				templates:{
					leftArrow: '<i class="fa fa-long-arrow-left"></i>',
					rightArrow: '<i class="fa fa-long-arrow-right"></i>'
				},
				*/
				/*
				startDate: '+0d',
				setDate: '+0d',
				defaultViewDate: { year: check_in_year, month: check_in_month, day: check_in_day }
				*/
			});
