import pandas as pd
import matplotlib.pyplot as plt
option=input("please enter the choice 1 for mileage info and 2 for trend plot : ")
​
​
if option =='1':
    data = pd.read_csv (r'C:\Users\suvos\Documents\FAU\COP4045Python\epadata2015.csv')
    df = pd.DataFrame(data, columns= ['Model Year','Mfr Name','Comb FE (Guide) - Conventional Fuel'])
       
​
    maxmpg=int(input("please enter the Max MPG : "))
    minmpg=int(input("please enter the Min MPG : "))
    df_filtered = df.loc[(df['Comb FE (Guide) - Conventional Fuel']<=maxmpg) & (df['Comb FE (Guide) - Conventional Fuel']>=minmpg)]
    print(df_filtered)
​
elif option =='2':
    data1 = pd.read_csv (r'C:\Users\suvos\Documents\FAU\COP4045Python\epadata2020.csv')
    opt=input("please choose (H)Highway MPG, (C)City MPG and (O)Overall MPG")
    
    if opt=='H' :
        df1 = pd.DataFrame(data1, columns= ['Model Year','Real-World MPG_Hwy'])
        h=input("do you want to display (D) or save to file (S) : "  )
         
   
        if h=='D' :
            df1.plot();
        else:
            plt.savefig("highway")
                
    elif opt=='C' :
        df2 = pd.DataFrame(data1, columns= ['Model Year','Real-World MPG_City'])
        h=input("do you want to display (D) or save to file (S) : " )
         
   
        if h=='D' :
            df2.plot();
        else:
            plt.savefig("city plot")
                
                
    elif opt=='O' :
        
        h=input("do you want to display (D) or save to file (S): "  )
        plt = pd.DataFrame(data1, columns= ['Model Year','Real-World MPG'])
        
        
        if h=='D' :
            df3.plot()
        else:
            plt.savefig("overall plot")
            
    
else:
    print("none")