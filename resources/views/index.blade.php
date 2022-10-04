<x-guest-layout>
    <x-navbar />
    <x-sidebar>
        <div id="container"></div>
    </x-sidebar>
    
    @push('child-scripts')
    <script>
        Highcharts.chart('container', {
  chart: {
    type: 'funnel'
  },
  title: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b> ({point.y:,.0f})',
        softConnector: true
      },
      center: ['40%', '50%'],
      neckWidth: '20%',
      neckHeight: '0%',
      width: '80%'
    }
  },
  legend: {
    enabled: false
  },
  series: [{
    name: 'Status',
    data: [
      ['Green', 1500],
      ['Yellow', 1500],
      ['Red', 1500],
    ]
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        plotOptions: {
          series: {
            dataLabels: {
              inside: true
            },
            center: ['50%', '50%'],
            width: '100%'
          }
        }
      }
    }]
  }
});
    </script>
    @endpush
</x-guest-layout>