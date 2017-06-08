//
//  main.swift
//  Athena02
//
//  Created by iii on 2017/6/7.
//  Copyright © 2017年 iii. All rights reserved.
//

import Foundation


for  j  in  0...9   {
    var isprimt: Bool = true
    var i = 2
    
    while i  <= 10  {
        let   num = j * 10 + i
        let  num1 = ((num  + 2) / 2)
        for  a  in 2...num1 {
            if  num % a  == 0  {
                isprimt =   false
                break
            }
            else    {
                isprimt  =  true
                
            }
            
        }
        //            print("\(num) \(isprimt)")
        
        print ( "\(isprimt ?  "*"   :   " " )   \(num)"  ,  terminator:  " ")
        i += 1
    }
    print ()  // print return
}


