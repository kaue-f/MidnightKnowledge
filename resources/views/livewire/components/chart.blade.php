<div class="flex flex-col w-full py-6 px-8 gap-10">
    <div class="flex flex-col gap-y-2 w-full">
        <p class="font-medium">Distribuição dos Status dos Conteúdos</p>
        <div id="mainStatus" style="width: 100%; height: 8rem;"></div>
    </div>
    <div class="flex flex-col gap-y-2 w-full">
        <p class="font-medium">Distribuição das Avaliações</p>
        <div id="mainRatings" style="width: 100%; height: 15rem;"></div>
    </div>
</div>

@push('scripts')
    @script
    <script>
        document.addEventListener('livewire:initialized', () => {
            var chartStatus = document.getElementById('mainStatus');
            var myChartStatus = echarts.init(chartStatus);
            var optionStatus;

            optionStatus = {
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                legend: {
                    padding: 2,
                    bottom: 0,
                    textStyle: {
                        fontWeight: 500,
                        fontSize: 13,
                        color: '#ececec'
                    },
                },
                grid: {
                    top: '5%',
                    bottom: '25%',
                    containLabel: true
                },
                xAxis: {
                    type: 'value',
                    show: false
                },
                yAxis: {
                    type: 'category',
                    show: false
                },
                series: [
                    {
                        name: 'Em Progresso',
                        type: 'bar',
                        stack: 'total',
                        color: '#0A38F0',
                        label: {
                            show: false,
                            fontWeight: 600,
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.PROGRESSO]
                    },
                    {
                        name: 'Lista de Desejos',
                        type: 'bar',
                        stack: 'total',
                        color: '#840FC2',
                        label: {
                            show: false,
                            fontWeight: 600,
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.LISTA]
                    },
                    {
                        name: 'Finalizado',
                        type: 'bar',
                        stack: 'total',
                        color: '#079D11',
                        label: {
                            show: false,
                            fontWeight: 600,
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.FINALIZADO]
                    },
                    {
                        name: 'Pausado',
                        type: 'bar',
                        stack: 'total',
                        color: '#E96E1C',
                        label: {
                            show: false,
                            fontWeight: 600,
                            color: "#FDFDFD"
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.PAUSADO]
                    },
                    {
                        name: 'Dropado',
                        type: 'bar',
                        stack: 'total',
                        color: '#EC091F',
                        label: {
                            show: false,
                            fontWeight: 600,
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.DROPADO]
                    },
                    {
                        name: 'Favorito',
                        type: 'bar',
                        stack: 'total',
                        color: '#FFDD00',
                        label: {
                            show: false,
                            fontWeight: 600,
                        },
                        emphasis: {
                            focus: 'series'
                        },
                        data: [$wire.chartStatus.FAVORITE]
                    }
                ]
            };

            var chart = document.getElementById('mainRatings');
            var myChartRatings = echarts.init(chart);
            var optionRatings;

            optionRatings = {
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                xAxis: [
                    {
                        type: 'category',
                        data: ['1 ⭐', '2 ⭐', '3 ⭐', '4 ⭐', '5 ⭐', '6 ⭐', '7 ⭐', '8 ⭐', '9 ⭐', '10 ⭐'],
                        axisTick: {
                            alignWithLabel: true,
                        },
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        show: false
                    }
                ], grid: {
                    top: '5%',
                    bottom: '10%',
                    containLabel: true
                },
                series: [
                    {
                        name: 'Ratings',
                        type: 'bar',
                        color: '#0A38F0',
                        barWidth: '60%',
                        data: $wire.chartRatings
                    }
                ]
            };

            optionStatus && myChartStatus.setOption(optionStatus);
            optionRatings && myChartRatings.setOption(optionRatings);
        });
    </script>
    @endscript
@endpush