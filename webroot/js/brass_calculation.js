let priceConfig = {
    brass:33.333,
    plate:16.67,
    aadi:11.67,
    teka:11.67,
};
let getAmount = (brass,type)=>{
    return Math.round(brass * priceConfig[type] * Number($('#days').val()) );
}
let calculateDays = ()=>{
    let from_date   = moment($('#from-date').val(),'DD/MM/YYYY');
    let to_date     = moment($('#to-date').val(),'DD/MM/YYYY');
    let days        = moment.duration(to_date.diff(from_date)).asDays();
    $('#days').val(days);
}

let calculateTotals = ()=>{
    let totalPlates = Number($('#p-3-2').val()) + Number($('#p-3-1-ll').val()) + Number($('#p-3-1-l').val()) + Number($('#p-3-1').val());
    let totalAadi   = Number($('#aadi').val());
    let totalTeka   = Number($('#teka').val());

    let plateBrass = totalPlates / 16;
    let aadiBrass = totalAadi / 40;
    let tekaBrass = totalTeka / 16;

    let minBrass = Math.min(plateBrass,aadiBrass,tekaBrass);

    let extraPlateBrass     = plateBrass - minBrass;
    let extraAadiBrass      = aadiBrass  - minBrass;
    let extraTekaBrass      = tekaBrass  - minBrass;

    // extraPlateBrass = (extraPlateBrass > 0.25) ? extraPlateBrass : 0
    // extraAadiBrass = (extraAadiBrass > 0.25) ? extraAadiBrass : 0
    // extraTekaBrass = (extraTekaBrass > 0.25) ? extraTekaBrass : 0

    let regularBrassAmt = getAmount(minBrass,'brass');

    let extraPlateBrassAmt = getAmount(extraPlateBrass,'plate');
    let extraAadiBrassAmt = getAmount(extraAadiBrass,'aadi');
    let extraTekaBrassAmt = getAmount(extraTekaBrass,'teka');

    $('.regularBrass').text(Number(minBrass).toFixed(0));
    $('.regularBrassAmt').text(regularBrassAmt);

    $('.extraPlateBrass').text(Number( extraPlateBrass ).toFixed(0));
    $('.extraPlateBrassAmt').text(extraPlateBrassAmt);

    $('.extraAadiBrass').text(Number( extraAadiBrass ).toFixed(0));
    $('.extraAadiBrassAmt').text(extraAadiBrassAmt);

    $('.extraTekaBrass').text(Number( extraTekaBrass ).toFixed(0));
    $('.extraTekaBrassAmt').text(extraTekaBrassAmt);

    let gTotal = Number(regularBrassAmt + extraPlateBrassAmt + extraAadiBrassAmt + extraTekaBrassAmt).toFixed(0);
    $('#total').val(gTotal);
    $('.gTotalAmt').text(gTotal);
};

$(function ($){
    $('.datepicker').datepicker({
        dateFormat:'dd/mm/yy'
    });
    $('#from-date,#to-date').on('change',function (event){
        calculateDays();
    });

    $('.bills.form form input').on('change keyup',function (event){
        calculateTotals();
    });
    calculateTotals();
});