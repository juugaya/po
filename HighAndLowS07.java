package owada.ch8;

import java.util.Scanner;

public class HighAndLowS07 {

	public static void main(String[] args) {
				// タイトル表示しています。
		System.out.println("**************");
		System.out.println("* High & Low *");
		System.out.println("**************");
		System.out.println();
           		//num変数（左側のカード）に1から９までのランダム関数を代入してます。
        		//変数resultは空にしている.キーボードの入力を受け付けている。
		Scanner sc =new Scanner(System.in);
		String result="";
		//繰り返し処理が行われるようにしている。
		while(true) {
			int num=(int)(Math.random()*9)+1;
				//問題を表示しています。変数numを代入してます。
		System.out.println("   問題表示   ");
		System.out.println("****** *******");
		System.out.println("*    * *  *  *");
		System.out.println("* "+num+"  * *  *  *");
		System.out.println("*    * *  *  *");
		System.out.println("****** *******");
		System.out.println();
		System.out.println("High or Low ?(h/l)　＞");
			//入力された値が変数selectに代入されている。
		String select= sc.nextLine();
				//右側のカードを１から９ランダムで出力できるようにしている。
        int rightCard=(int)(Math.random()*9)+1;
        //条件式で変数slectにhが入力された場合は→Highを選択しました。と出力できるようにしている。
        //それ以外の時は→Lowを選択しました。と出力できるようにしている。
	if(select.equals("h")) {
		System.out.println("→Highを選択しました。");}
	else {
		System.out.println("→Lowを選択しました。");
	      }

		System.out.println();
		System.out.println("   結果表示   ");
		System.out.println("****** *******");
		System.out.println("*    * *     *");
		System.out.println("* "+num+"  * * "+rightCard+"   *");
		System.out.println("*    * *     *");
		System.out.println("****** *******");
			//条件式で右側のカード変数rightCardが大きい場合に変数resultにhが代入されるようにしている。
	if(num<rightCard) { result="h";}
			//条件式で左側のカードnumが大きい場合に変数resultにlが代入されるようにしている。
		else if(num>rightCard) { result="l";}
			//それ以外のとき（同じおおきさの場合は変数resultに入力値が代入されるようにしている。）
			else {result= select;}
			//改行している。
					System.out.println();
			//条件式でもし変数resultが変数selectと同じ場合はyou Win!"と表示して
		if(result.equals(select)) {
		System.out.println("you Win!");
		System.out.println();
		}
			//条件式でそれ以外の時はyou Lose...と表示してループから抜け出すように処理している。
		else {
			System.out.println("you Lose...");
		      break;
				}

					}
			//ループから抜け出す処理をしたら--ゲーム終了--と表示するようにしている。
		System.out.println("--ゲーム終了--");
	}
}