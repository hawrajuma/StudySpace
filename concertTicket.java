package concertTicket;

import java.util.Scanner;

public class concertTicket {
double vipPrice;
double generalPrice;
	public concertTicket() {
		vipPrice = 200;
		generalPrice=50;
	}
public double checkprice(String seatType,int noOfTickets) {
	if (seatType.equalsIgnoreCase("v")) {
		return noOfTickets*vipPrice;
	}
	if (seatType.equalsIgnoreCase("g")) {
		return noOfTickets*generalPrice;
	}
	else
	return 0;
}

	public static void main(String[] args) {

concertTicket conc = new concertTicket();
Scanner sc = new Scanner(System.in);
String stype;
int notickets;

System.out.println("Enter the type of ticket: \n v for VIP \n g for General");
//1st modification 
while(true) {
	//2ND modification
		stype=sc.next();
		char c=stype.charAt(0);
stype=Character.toString(c);
if(stype.equalsIgnoreCase("v") || stype.equalsIgnoreCase("g"))	{
	break;
}
System.out.println("Kindly Choose \n 'v' for VIP \n 'g' for General.");
}
System.out.println("Enter the number of tickets:");
//3rd modification
while(true) {
	notickets=sc.nextInt();
	if(notickets>0) {
		break;
	}
	System.out.println("Kindly enter a positive number only.");
}

System.out.println("Total Price: "+ conc.checkprice(stype, notickets));



	}

}