// import 'package:http/http.dart' as http;
// import 'dart:convert';
// import 'package:ahwaz_application/helper/helper.dart';
import 'package:ahwaz_application/helper/user_helper.dart';
import 'package:ahwaz_application/model/user.dart';

void main(List<String> arguments) async {
  // ambil produk
  print("Ambil data dari user...");
  User pengguna = await getUserById();
  print(pengguna.email);
}

