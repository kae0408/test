
public class Test {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ
		Person taro =new Person();
		taro.name="山田太郎";
		taro.age=20;
		System.out.print(taro.name);
		System.out.println(taro.age);
		
		Person jiro =new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		System.out.print(jiro.name);
		System.out.println(jiro.age);		
		
		Person hanako =new Person();
		hanako.name="山田花子";
		hanako.age=16;
		System.out.print(hanako.name);
		System.out.println(hanako.age);
		
		Person kae =new Person();
		kae.talk();
		kae.name="田沢花絵";
		kae.age=27;
		kae.phoneNumber="09030674406";
		System.out.print(kae.name);
		System.out.print(kae.age);
		System.out.print(kae.phoneNumber);
	}

}
