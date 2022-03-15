<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];


$net_income = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
echo "\nBob's annual income is $net_income.\n";

$net_income -= $socialSecurity;
$annualIncome = $net_income;
echo "\nBob's annual income after paying his social security is $annualIncome.\n";

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
echo "\nBob's annual income after annual expenses is $annualIncome.\n";

$monthlyIncome = $annualIncome / 12;
echo "\nBob's monthly income before expenses is $monthlyIncome.\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "\nBob's monthly income after expenses is $monthlyIncome.\n";

$weeklyIncome = $monthlyIncome / 4.33;
echo "\nBob's weekly income before expenses is $weeklyIncome.\n";

$weeklyExpenses = ["gas"=> 25, "food"=> 90, "entertainment"=> 47];

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];
echo "\nBob's weekly income after expenses is $weeklyIncome.\n";

$savings = $weeklyIncome * 52;
echo "\nBob's can save $weeklyIncome every week, he can save $savings in a year.\n";

echo "\nBob can save " . round($savings,2) . " a year.";



