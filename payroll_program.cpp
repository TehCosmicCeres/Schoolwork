#include <iostream>
#include <iomanip>
using namespace std;

int main()
{
    string empName = "";
    double hrsWrked = 0;
    double wages = 0;
    double payRate = 0;
    double ovrTimeHrs = 0;
    double ovrTimePay = 0;
    double grossPay = 0;
    double netPay = 0;
    const double insDeduct = 75;
    const double retire = .06;
    const double tax = .23;
    double taxDeduct = 0;
    string insChoice = "";
    string pensChoice = "";
    bool ifOvrTime;
    double retireDeduct;
    const int lineWidth = 31; 

    cout << "Please enter your name: " << endl;
    cin >> empName;
    cout << "Please enter your hours worked: " << endl;
    cin >> hrsWrked;
    cout << "Please enter your rate of pay: "<< endl;
    cin >> payRate;
    cout << "Do you want to participate in the pension plan? (y or n): "<< endl;
    cin >> pensChoice;
    cout << "Do you want to participate in the insurance plan? (y or n): "<< endl;
    cin >> insChoice;

    if(hrsWrked > 40)
    {
        ovrTimeHrs = hrsWrked - 40;
        ovrTimePay = (payRate * 1.5) * ovrTimeHrs;
        ifOvrTime = true;
        wages = (hrsWrked - ovrTimeHrs) * payRate;
    }
    else if(hrsWrked <= 40)
    {
        wages = hrsWrked * payRate;
        ifOvrTime = false;
    }
    grossPay = ovrTimePay + wages;
    retireDeduct = grossPay * 0.06;

    if(insChoice == "y" && pensChoice != "y" || insChoice == "Y" && pensChoice != "Y")
    {
        taxDeduct = (grossPay - insDeduct) * tax;
        netPay = grossPay - insDeduct - taxDeduct;
    }
    else if(insChoice != "y" && pensChoice == "y" || insChoice != "Y" && pensChoice == "Y")
    {
        taxDeduct = (grossPay - retireDeduct ) * tax;
        netPay = grossPay - retireDeduct - taxDeduct;
    }
    else if(insChoice == "y" && pensChoice == "y" || insChoice == "Y" && pensChoice == "Y")
    {
        taxDeduct = (grossPay - (retireDeduct + insDeduct)) * tax;
        netPay = grossPay - insDeduct - retireDeduct - taxDeduct;
    }
    else if(insChoice != "y" && pensChoice != "y" || insChoice != "Y" && pensChoice != "Y")
    {
        taxDeduct = grossPay * tax;
        netPay = grossPay - taxDeduct;
    }
    cout << setfill('.');
    cout << "Employee Name: " << empName << endl;
    cout << setfill('.');
    cout << "Total Hours Worked: " << hrsWrked << endl;
    cout << setfill('.');
    cout << left << setw(lineWidth) << "Gross Pay for Regular Hours: $" << fixed << setprecision(2) << right << setw(6) << wages << endl;
    if(ifOvrTime == true)
    {
        cout << setfill('.');
        cout << left << setw(lineWidth) << "Gross Pay for Overtime Hours: $" << fixed << setprecision(2) << right << setw(6) << ovrTimePay << endl;
    }

    if(insChoice == "y" || insChoice == "Y")
    {
        cout << setfill('.');
        cout << left << setw(lineWidth) << "Insurance Deduction: $" << fixed << setprecision(2) << right << setw(6) << insDeduct << endl;
    }

    if(pensChoice == "y" || pensChoice == "Y")
    {
        cout << setfill('.');
        cout << left << setw(lineWidth) << "Retirement Plan Deduction: $" << fixed << setprecision(2) << right << setw(6) << retireDeduct << endl;
    }
    cout << setfill('.');
    cout << left << setw(lineWidth) << "FICA Taxes: $" << fixed << setprecision(2) << right << setw(6) << taxDeduct << endl;
    cout << setfill('.');
    cout << left << setw(lineWidth) << "Net Pay: $" << fixed << setprecision(2) << right << setw(6) << netPay << endl;
    
    return 0;
}