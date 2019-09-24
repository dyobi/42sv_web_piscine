function ft_split(string) {
    var res = string.trim().split(/\s+/).sort();
    return (res);
}