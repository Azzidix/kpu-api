var candidate = [
	{
		id: '1',
		nama: 'Ayana Moon',
		prodi: 'Teknik Informatika',
		photo: 'avatar.png'
	},
	{
		id: '2',
		nama: 'Anya Geraldine',
		prodi: 'Farmasi',
		photo: 'avatar.png'
	},
	{
		id: '3',
		nama: 'Jung Guk',
		prodi: 'Manajemen',
		photo: 'avatar.png'
	}
];

var vote = [
	{
		id: '1',
		vote: 12
	},
	{
		id: '2',
		vote: 25
	},
	{
		id: '3',
		vote: 7
	}
]

var vcandidate = document.querySelector('#candidate');

function getData() {
    if (candidate) {
    	let vdata = '';
    	candidate.forEach((elm, index) => {
    		vdata += `
    			<div class="col-sm-6 col-md-3 col-lg-3 mb-3" data-id="${index}">
    				<div class="card">
    					<div class="card-image">
    						<span class="number">${index+1}</span>
    						<img src="./img/${elm.photo}" class="img-fluid">
    					</div>
    					<div class="card-footer">
    						<ul class="list-unstyled mb-0">
    							<li>${elm.nama}</li>
    							<li>${elm.prodi}</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		`;
    	});
    	vcandidate.innerHTML = vdata;
    }
}

function getName() {
	let cname = [];
	candidate.forEach((elm, index) => {
		cname.push(`${elm.nama}`);
	});
	return cname;
}

function getVote() {
	let cvote = [];
	vote.forEach((elm, index) => {
		cvote.push(`${elm.vote}`);
	});
	return cvote;
}

function getTotalVote() {
	let cvote = 0;
	vote.forEach((elm, index) => {
		cvote += elm.vote;
	});
	return cvote;
}

var minute = 0;
function getLogVote() {
    let vcandidate = Math.floor(Math.random() * candidate.length - 0);
    minute += 1;
    return `
        <li class="">
            <span class="message"> 1 Suara baru</span> 
            <span class="time"> ${minute} min ago</span>
        </li>
    `;
}

for (let x = 0; x < 10; x++) {
    $('#log').append(getLogVote());
}

function createChart() {

    var ctx = document.getElementById('chartpie').getContext('2d');

    var chartpie = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: getName(),
            datasets: [{
                label: 'Count of Votes',
                data: getVote(),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            tooltips: {
            	callbacks: {
            		label: function(tooltipItem, data) {
                        let totals = data.datasets[tooltipItem.datasetIndex].data;
            			let numVote = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] || '';
            			let vname = data.labels[tooltipItem.index] || '';
                        let total = 0;
                        totals.forEach((elm, index) => {
                            total += parseInt(elm); 
                        });
                        let percentgae = Math.round((numVote * 100 / (total)));
            			if (vname) {
                            vname += `: ${percentgae}% - ${numVote} Suara`;
                        }
                        return vname;
            		}
            	}
            },
            title: {
                display: true,
                text: `Total Suara: ${getTotalVote()}`
            }
        }
    });
}

// $.notify('Hello word', 'success');

function votes() {
	$('.notif').notify('1 Vote Baru', 'success');

	// alertify.warning('1 Vote Baru');
	setTimeout(function() {
		votes()
	}, 1000);
}

// votes()

$('.navbar-toggler').on('click', (e) => {
    if ($(e.target).find('i').hasClass('fa-bars')) {
        $(e.target).find('i').removeClass('fa-bars');
        $(e.target).find('i').addClass('fa-times');
    } else {
        $(e.target).find('i').removeClass('fa-times');
        $(e.target).find('i').addClass('fa-bars');
    }
})


$('.navbar-toggler i.fa').on('click', (e) => {
    if ($(e.target).hasClass('fa-bars')) {
        $(e.target).removeClass('fa-bars');
        $(e.target).addClass('fa-times');
    } else {
        $(e.target).removeClass('fa-times');
        $(e.target).addClass('fa-bars');
    }
})

